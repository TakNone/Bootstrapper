# inputWallPaperNoFile

**Description** : *Wallpaper with no file access hash, used for example when deleting \(unsave=true\) wallpapers using account\.saveWallPaper, specifying just the wallpaper ID*

**Layer** : 229

```tl
inputWallPaperNoFile#967a462e id:long = InputWallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Wallpaper ID |

---

## Type

[InputWallPaper](type/InputWallPaper)

---

## Example

```php
$inputWallPaper = $client->inputWallPaperNoFile(
	id : -2417226790171267716,
);
```