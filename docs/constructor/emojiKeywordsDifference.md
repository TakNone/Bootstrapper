# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 227

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
	lang_code : 'AhzTiuRefUp5F8w4',
	from_version : 68,
	version : 6,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'gZNnaf19CzDQqeIr',
			emoticons : array('jIhDT6xpkJtSnRPG'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'vKoQUn9IHcjpxPy0',
			emoticons : array('wn4kPvJfTZ7UaOmC'),
		),
	),
);
```