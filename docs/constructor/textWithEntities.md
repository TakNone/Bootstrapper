# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 211

```tl
textWithEntities#751f3146 text:string entities:Vector<MessageEntity> = TextWithEntities;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[TextWithEntities](type/TextWithEntities)

---

## Example

```php
$textWithEntities = $client->textWithEntities(
	text : '024CD5VkINic3Ylf',
	entities : array(
		$client->messageEntityUnknown(
			offset : 51,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 46,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 61,
			length : 18,
		),
		$client->messageEntityBotCommand(
			offset : 71,
			length : 78,
		),
		$client->messageEntityUrl(
			offset : 43,
			length : 72,
		),
		$client->messageEntityEmail(
			offset : 3,
			length : 12,
		),
		$client->messageEntityBold(
			offset : 65,
			length : 68,
		),
		$client->messageEntityItalic(
			offset : 63,
			length : 54,
		),
		$client->messageEntityCode(
			offset : 83,
			length : 90,
		),
		$client->messageEntityPre(
			offset : 52,
			length : 4,
			language : 'yMF9x7HTodViJSNm',
		),
		$client->messageEntityTextUrl(
			offset : 84,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 10,
			length : 44,
			user_id : -5158101015650271256,
		),
		$client->inputMessageEntityMentionName(
			offset : 85,
			length : 64,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 97,
			length : 69,
		),
		$client->messageEntityCashtag(
			offset : 92,
			length : 43,
		),
		$client->messageEntityUnderline(
			offset : 33,
			length : 45,
		),
		$client->messageEntityStrike(
			offset : 14,
			length : 14,
		),
		$client->messageEntityBankCard(
			offset : 44,
			length : 56,
		),
		$client->messageEntitySpoiler(
			offset : 89,
			length : 67,
		),
		$client->messageEntityCustomEmoji(
			offset : 31,
			length : 73,
			document_id : -6295676717136888286,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 77,
			length : 51,
		),
	),
);
```