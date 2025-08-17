# inputFile

**Description** : *Defines a file saved in parts using the method upload.saveFilePart*

**Layer** : 211

```tl
inputFile#f52ff27f id:long parts:int name:string md5_checksum:string = InputFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Random file identifier created by the client |
| <mark>parts</mark> | [`int`](type/int) | Number of parts saved |
| <mark>name</mark> | [`string`](type/string) | Full name of the file |
| <mark>md5_checksum</mark> | [`string`](type/string) | In case the file's md5-hash was passed, contents of the file will be checked prior to use |

---

## Type

[InputFile](type/InputFile)

---

## Example

```php
$inputFile = $client->inputFile(
	id : 2361947142760120409,
	parts : 89,
	name : 'WLPwGNaVEhIobZl4',
	md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
);
```