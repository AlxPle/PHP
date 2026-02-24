<?php
// Example: HTML forms with different field types and preserving values on validation errors.

function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$formData = [
    'full_name' => '',
    'email' => '',
    'age' => '',
    'country' => '',
    'gender' => '',
    'bio' => '',
    'newsletter' => '',
    'terms' => '',
];

$countryOptions = ['USA', 'Germany', 'Ukraine', 'Poland', 'Other'];
$errors = [];
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData['full_name'] = trim($_POST['full_name'] ?? '');
    $formData['email'] = trim($_POST['email'] ?? '');
    $formData['age'] = trim($_POST['age'] ?? '');
    $formData['country'] = $_POST['country'] ?? '';
    $formData['gender'] = $_POST['gender'] ?? '';
    $formData['bio'] = trim($_POST['bio'] ?? '');
    $formData['newsletter'] = isset($_POST['newsletter']) ? 'yes' : '';
    $formData['terms'] = isset($_POST['terms']) ? 'accepted' : '';

    if ($formData['full_name'] === '') {
        $errors[] = 'Full name is required.';
    }

    if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }

    if ($formData['age'] !== '' && filter_var($formData['age'], FILTER_VALIDATE_INT) === false) {
        $errors[] = 'Age must be a number.';
    }

    if ($formData['country'] === '' || !in_array($formData['country'], $countryOptions, true)) {
        $errors[] = 'Please select a valid country.';
    }

    if (!in_array($formData['gender'], ['male', 'female', 'other'], true)) {
        $errors[] = 'Please choose a gender option.';
    }

    if ($formData['bio'] === '') {
        $errors[] = 'Bio is required.';
    }

    if ($formData['terms'] !== 'accepted') {
        $errors[] = 'You must accept the terms.';
    }

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        if ($_FILES['avatar']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Avatar must be smaller than 2MB.';
        }
    }

    if (empty($errors)) {
        $successMessage = 'Form submitted successfully.';
    }
}
?>

<h2>HTML Forms Example</h2>

<?php if ($successMessage !== ''): ?>
    <p style="color: green;"><?php echo escapeHtml($successMessage); ?></p>
<?php endif; ?>

<?php if (!empty($errors)): ?>
    <ul style="color: red;">
        <?php foreach ($errors as $error): ?>
            <li><?php echo escapeHtml($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="full_name">Full Name:</label>
    <input id="full_name" type="text" name="full_name" value="<?php echo escapeHtml($formData['full_name']); ?>">
    <br><br>

    <label for="email">Email:</label>
    <input id="email" type="email" name="email" value="<?php echo escapeHtml($formData['email']); ?>">
    <br><br>

    <label for="age">Age:</label>
    <input id="age" type="number" name="age" value="<?php echo escapeHtml($formData['age']); ?>">
    <br><br>

    <label for="country">Country:</label>
    <select id="country" name="country">
        <option value="">-- Select country --</option>
        <?php foreach ($countryOptions as $country): ?>
            <option value="<?php echo escapeHtml($country); ?>" <?php echo $formData['country'] === $country ? 'selected' : ''; ?>>
                <?php echo escapeHtml($country); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    Gender:
    <label>
        <input type="radio" name="gender" value="male" <?php echo $formData['gender'] === 'male' ? 'checked' : ''; ?>> Male
    </label>
    <label>
        <input type="radio" name="gender" value="female" <?php echo $formData['gender'] === 'female' ? 'checked' : ''; ?>> Female
    </label>
    <label>
        <input type="radio" name="gender" value="other" <?php echo $formData['gender'] === 'other' ? 'checked' : ''; ?>> Other
    </label>
    <br><br>

    <label for="bio">Bio:</label><br>
    <textarea id="bio" name="bio" rows="4" cols="40"><?php echo escapeHtml($formData['bio']); ?></textarea>
    <br><br>

    <label>
        <input type="checkbox" name="newsletter" <?php echo $formData['newsletter'] === 'yes' ? 'checked' : ''; ?>> Subscribe to newsletter
    </label>
    <br><br>

    <label for="avatar">Avatar (optional):</label>
    <input id="avatar" type="file" name="avatar" accept="image/*">
    <br><br>

    <label>
        <input type="checkbox" name="terms" <?php echo $formData['terms'] === 'accepted' ? 'checked' : ''; ?>> I accept the terms
    </label>
    <br><br>

    <button type="submit">Submit</button>
</form>