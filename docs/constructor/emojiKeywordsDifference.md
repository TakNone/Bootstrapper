# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 222

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
	lang_code : 'ubVLF6lPdJ5egkXc',
	from_version : 95,
	version : 36,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'i2gbtfNSGLQBEohu',
			emoticons : array('lOEAQ25bmIYBjVig'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'Bof3JzuFxh49yNvb',
			emoticons : array('GB9LSZHJaAlcnI4D'),
		),
	),
);
```