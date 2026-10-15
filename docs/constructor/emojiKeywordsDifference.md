# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 229

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
	lang_code : 'xo0XdC2MwPc4NQ1S',
	from_version : 44,
	version : 86,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'K0SyLeVONRgaMHtE',
			emoticons : array('sSzU68HFqX24aGtV'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'o3f7D2uRmkOGnVg4',
			emoticons : array('pOkuiv38b7t5FhlX'),
		),
	),
);
```