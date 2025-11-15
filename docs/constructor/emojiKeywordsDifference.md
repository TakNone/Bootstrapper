# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 218

```tl
emojiKeywordsDifference#5cc761bd lang_code:string from_version:int version:int keywords:Vector<EmojiKeyword> = EmojiKeywordsDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code for keywords |
| <mark>from_version</mark> | [`int`](type/int) | Previous emoji keyword list version |
| <mark>version</mark> | [`int`](type/int) | Current version of emoji keyword list |
| <mark>keywords</mark> | [`Vector<EmojiKeyword>`](type/EmojiKeyword) | Emojis associated to keywords |

---

## Type

[EmojiKeywordsDifference](type/EmojiKeywordsDifference)

---

## Example

```php
$emojiKeywordsDifference = $client->emojiKeywordsDifference(
	lang_code : 'vbo8D2VwABy63KjZ',
	from_version : 7,
	version : 8,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'I2AsPNkpxrUWd0BD',
			emoticons : array('HA7S2MQxpZT6wYqy'),
		),
		$client->emojiKeywordDeleted(
			keyword : '7EMjiBWKGxrUfXQL',
			emoticons : array('HAvpDEbSjtRmoZzM'),
		),
	),
);
```