# inputRichFileDocument

**Layer** : 227

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
	id : 'j5uavUKWV0IR4h2s',
	document : $client->inputDocumentEmpty(),
);
```