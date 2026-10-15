# inputRichFileDocument

**Layer** : 229

```tl
inputRichFileDocument#83281dbd id:string document:InputDocument = InputRichFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | NOTHING |
| <mark>document</mark> | [`InputDocument`](type/InputDocument) | NOTHING |

---

## Type

[InputRichFile](type/InputRichFile)

---

## Example

```php
$inputRichFile = $client->inputRichFileDocument(
	id : 'SvmCZETaFXMk1Nb4',
	document : $client->inputDocumentEmpty(),
);
```