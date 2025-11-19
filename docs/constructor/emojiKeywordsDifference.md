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
	lang_code : '2MLYX0oPsVp8HBEK',
	from_version : 91,
	version : 63,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'rCUvu1bJVtlOyNQG',
			emoticons : array('35ydfuxUrYwIkapq'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'X8MbmP54TJkl2Ltq',
			emoticons : array('PLHWecZUy76mnldr'),
		),
	),
);
```