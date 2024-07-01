=== Belov Text ACF Block Task ===
Contributors: Martin Ndegwa Moche
Tags:         acf block
Stable tag:   0.0.1
License:      GPL-2.0-or-later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Gutenberg Block with ACF Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        p {
            margin-bottom: 12px;
        }

        code {
            font-family: Consolas, monospace;
            background-color: #f0f0f0;
            padding: 2px 4px;
            border-radius: 4px;
        }

        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <h1>Custom Gutenberg Block with ACF Assignment</h1>

    <h2>Task Details</h2>
    <ul>
        <li><strong>Figma Design:</strong> <a href="https://www.figma.com/design/xUKdOzSL8zqpxzka7TomwB/Test-Task">View Design</a></li>
        <li><strong>Block Location:</strong> Under the header (the only block in the Figma file)</li>
        <li><strong>Approach:</strong> Implemented following best practices and high standards of code quality.</li>
    </ul>

    <h2>Features Implemented</h2>
    <ul>
        <li>Created a custom Gutenberg block using ACF.</li>
        <li>Ensured the block's appearance and functionality match the design provided in Figma.</li>
        <li>Implemented necessary styles and ensured responsiveness where applicable.</li>
    </ul>

    <h2>Repository Structure</h2>
    <pre>
/acf-block/
├── acf-json/
│   └── (ACF JSON files)
├── assets/
│   ├── css/
│   │   └── (CSS files)
│   ├── js/
│   │   └── (JavaScript files)
│   └── img/
│       └── (Image files)
├── blocks/
│   └── (Gutenberg block PHP files)
├── README.md
├── functions.php
└── style.css
    </pre>

    <h2>Local Development</h2>
    <ol>
        <li>Clone this repository to your local machine.</li>
        <li>Set up a local WordPress environment.</li>
        <li>Import the provided ACF JSON files.</li>
        <li>Activate the theme and verify the block under the header section.</li>
        <li>Customize styles and functionality as needed.</li>
    </ol>

    <h2>Online Demo</h2>
    <ul>
        <li><strong>GitHub Repository:</strong> <a href="https://github.com/your-username/your-repo">Link</a></li>
        <li><strong>Live Local WP Link:</strong> <a href="http://localhost:8888/your-site">Link</a></li>
    </ul>

    <h2>Notes</h2>
    <ul>
        <li>Ensure that all dependencies are correctly installed and configured before testing.</li>
        <li>Feedback and improvements are welcome. Please open an issue or pull request if needed.</li>
    </ul>
</body>

</html>

