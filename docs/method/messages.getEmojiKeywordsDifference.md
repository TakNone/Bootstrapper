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
	lang_code : 'ME7CI5lHWLn9hc4V',
	from_version : 99,
);
```