<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD 파일 보기 (JS)</title>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <style>
        /* 기본적인 CSS 스타일 */
        body { font-family: sans-serif; line-height: 1.6; margin: 20px; }
        pre { background-color: #f4f4f4; padding: 10px; border-radius: 5px; overflow-x: auto; }
        code { background-color: #f4f4f4; padding: 2px 4px; border-radius: 3px; }
        blockquote { border-left: 4px solid #ccc; padding-left: 10px; color: #555; }
        h1, h2, h3, h4, h5, h6 { border-bottom: 1px solid #eee; padding-bottom: 5px; margin-top: 1.5em; }
        img { max-width: 100%; height: auto; display: block; margin: 0 auto; }
    </style>
</head>
<body>
    <div id="markdown-content">
        </div>

    <script>
        // Markdown 파일 경로
        const markdownFilePath = 'md/list.md'; // 실제 MD 파일 경로로 변경

        fetch(markdownFilePath)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then(markdownText => {
                // marked.js를 사용하여 Markdown을 HTML로 변환
                const htmlContent = marked.parse(markdownText);
                document.getElementById('markdown-content').innerHTML = htmlContent;
            })
            .catch(error => {
                console.error('Error fetching or rendering markdown:', error);
                document.getElementById('markdown-content').innerHTML = '<p>Error loading content.</p>';
            });
    </script>
</body>
</html>