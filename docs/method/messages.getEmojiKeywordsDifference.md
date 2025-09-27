# messages.getEmojiKeywordsDifference

**Description** : *Get changed emoji keywords &raquo;*

**Layer** : 216

```tl
messages.getEmojiKeywordsDifference#1508b6af lang_code:string from_version:int = EmojiKeywordsDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |
| <mark>from_version</mark> | [`int`](type/int) | Previous stored emoji keyword list version |

---

## Result

[EmojiKeywordsDifference](type/EmojiKeywordsDifference)

---

## Example

```php
$emojiKeywordsDifference = $client->messages->getEmojiKeywordsDifference(
	lang_code : 'rqOT8y6fG4QvmKRY',
	from_version : 94,
);
```