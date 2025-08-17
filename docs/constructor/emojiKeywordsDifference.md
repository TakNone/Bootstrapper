# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 211

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
	lang_code : 'CYF4pS9n7cLDH1zB',
	from_version : 20,
	version : 97,
	keywords : array(
		$client->emojiKeyword(
			keyword : '4HyOe8VwCM6qY7Zs',
			emoticons : array('JciVyGnvWqeSd4YR'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'aPsqfDUHv5gnS1CK',
			emoticons : array('oMfaZEJprI6T8UvQ'),
		),
	),
);
```