import os

path = "./"
readme = "readme.md"


content = "# PHP Programs\n\n---\n\n"
dirs = [i for i in os.listdir(path)]

for dir in dirs:
    if "." in dir:
        continue
    with open(path + dir + "/qn.txt", "r") as file:
        question = file.read().strip()
    code = ""
    for file in os.listdir(path + dir):
        if (
            file.endswith(".php")
            or file.endswith(".html")
            or file.endswith(".css")
            or file.endswith(".js")
        ):
            with open(path + dir + "/" + file, "r") as f:
                code += f"**{file}**\n\n```php\n{f.read().strip()}\n```\n\n"
    content += f"## {question}\n\n"
    content += f"{code}\n\n---\n\n"

with open(readme, "w") as file:
    file.write(content)

print("Successfully updated readme.md")
