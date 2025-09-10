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
	text : 'TdcwN876Amqrt0MJ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 19,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 65,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 8,
			length : 82,
		),
		$client->messageEntityBotCommand(
			offset : 16,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 70,
			length : 9,
		),
		$client->messageEntityEmail(
			offset : 81,
			length : 65,
		),
		$client->messageEntityBold(
			offset : 19,
			length : 3,
		),
		$client->messageEntityItalic(
			offset : 80,
			length : 46,
		),
		$client->messageEntityCode(
			offset : 70,
			length : 81,
		),
		$client->messageEntityPre(
			offset : 96,
			length : 33,
			language : 'dctN2T91gSFLbmMv',
		),
		$client->messageEntityTextUrl(
			offset : 9,
			length : 88,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 31,
			length : 44,
			user_id : -8052153249654769177,
		),
		$client->inputMessageEntityMentionName(
			offset : 86,
			length : 100,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 15,
			length : 86,
		),
		$client->messageEntityCashtag(
			offset : 21,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 1,
			length : 20,
		),
		$client->messageEntityStrike(
			offset : 35,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 9,
			length : 18,
		),
		$client->messageEntitySpoiler(
			offset : 91,
			length : 14,
		),
		$client->messageEntityCustomEmoji(
			offset : 57,
			length : 16,
			document_id : 4916814133795713980,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 73,
			length : 94,
		),
	),
);
```