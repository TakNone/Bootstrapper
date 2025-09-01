# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 214

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
	lang_code : 'zeTKlmJyDfhRnQAO',
	from_version : 29,
	version : 23,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'cqeTakI4HWduwx8N',
			emoticons : array('YGwRmbBy8TuPtLFI'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'fRv9PDV8ZMugEk2t',
			emoticons : array('9mygqTuLkYiX0aMn'),
		),
	),
);
```