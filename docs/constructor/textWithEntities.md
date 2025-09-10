# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 214

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
	text : 'oyjextmTEhkDH3w7',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 72,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 5,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 36,
			language : 'HEU34ktF2M5orCe1',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 39,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : -2356353528135349190,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 53,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 62,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 30,
			document_id : 2225404069388383554,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 40,
		),
	),
);
```