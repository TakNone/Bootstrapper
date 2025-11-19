# inputWallPaperNoFile

**Description** : *Wallpaper with no file access hash, used for example when deleting \(unsave=true\) wallpapers using account\.saveWallPaper, specifying just the wallpaper ID*

**Layer** : 218

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
	id : 4480292158775843469,
);
```