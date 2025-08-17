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
	text : 'Hc5wszjMmalYOr8o',
	entities : array(
		$client->messageEntityUnknown(
			offset : 93,
			length : 0,
		),
		$client->messageEntityMention(
			offset : 44,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 30,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 54,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 96,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 44,
			length : 51,
		),
		$client->messageEntityBold(
			offset : 96,
			length : 87,
		),
		$client->messageEntityItalic(
			offset : 14,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 95,
			length : 50,
		),
		$client->messageEntityPre(
			offset : 29,
			length : 23,
			language : 'lDs1Jjv6ItaRYCnU',
		),
		$client->messageEntityTextUrl(
			offset : 71,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 48,
			length : 6,
			user_id : 500420047438522261,
		),
		$client->inputMessageEntityMentionName(
			offset : 29,
			length : 63,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 85,
			length : 4,
		),
		$client->messageEntityCashtag(
			offset : 32,
			length : 83,
		),
		$client->messageEntityUnderline(
			offset : 75,
			length : 34,
		),
		$client->messageEntityStrike(
			offset : 9,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 24,
			length : 48,
		),
		$client->messageEntitySpoiler(
			offset : 10,
			length : 19,
		),
		$client->messageEntityCustomEmoji(
			offset : 82,
			length : 6,
			document_id : -8918419369201179297,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 75,
			length : 14,
		),
	),
);
```