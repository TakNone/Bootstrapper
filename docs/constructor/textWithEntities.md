# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 222

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
	text : '3XODJaUnECIGgksq',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 45,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 78,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 72,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 23,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 88,
			language : 'qtrgO0vCsWk749dV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 78,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : -1339257236711382090,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 84,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 8,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 49,
			document_id : 7517423252496354352,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
		),
	),
);
```