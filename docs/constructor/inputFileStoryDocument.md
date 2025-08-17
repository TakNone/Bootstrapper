# inputFileStoryDocument

**Description** : *Used to edit the thumbnail/static preview of a story, see here » for more info on the full flow*

**Layer** : 211

```tl
inputFileStoryDocument#62dc8b48 id:InputDocument = InputFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | The old story video |

---

## Type

[InputFile](type/InputFile)

---

## Example

```php
$inputFile = $client->inputFileStoryDocument(
	id : $client->inputDocumentEmpty(),
);
```