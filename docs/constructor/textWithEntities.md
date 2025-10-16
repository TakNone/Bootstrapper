# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 216

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
	text : '4yDuvV6EMPi0kZTx',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 64,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 62,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 8,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 77,
			language : 'VYdHT5BIaysCFMmx',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 79,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 39,
			user_id : -5618164356567718854,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 94,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 99,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 68,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 46,
			document_id : -7793089883279991502,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 79,
		),
	),
);
```