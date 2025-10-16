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
	text : 'WqmOEvHjpPxUlI41',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 82,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 32,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 52,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 71,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 76,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 43,
			language : 'Iga7s0ZmHy6iBjMT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : -503900508926853908,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 81,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 41,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : 6473568639470676460,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 41,
		),
	),
);
```