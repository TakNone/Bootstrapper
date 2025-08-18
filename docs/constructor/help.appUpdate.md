# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 211

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_not_skip** | [`flags.0?true`](type/true) | Unskippable, the new info must be shown to the user (with a popup or something else) |
| <mark>id</mark> | [`int`](type/int) | Update ID |
| <mark>version</mark> | [`string`](type/string) | New version name |
| <mark>text</mark> | [`string`](type/string) | Text description of the update |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **document** | [`flags.1?Document`](type/Document) | Application binary |
| **url** | [`flags.2?string`](type/string) | Application download URL |
| **sticker** | [`flags.3?Document`](type/Document) | Associated sticker |

---

## Type

[help.AppUpdate](type/help.AppUpdate)

---

## Example

```php
$helpAppUpdate = $client->help->appUpdate(
	can_not_skip : true,
	id : 25,
	version : '8StFAeMWK50lTkow',
	text : 'Tr3ILxVZof1hAXG2',
	entities : array(
		$client->messageEntityUnknown(
			offset : 69,
			length : 58,
		),
		$client->messageEntityMention(
			offset : 87,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 8,
			length : 74,
		),
		$client->messageEntityBotCommand(
			offset : 43,
			length : 86,
		),
		$client->messageEntityUrl(
			offset : 39,
			length : 3,
		),
		$client->messageEntityEmail(
			offset : 38,
			length : 39,
		),
		$client->messageEntityBold(
			offset : 26,
			length : 100,
		),
		$client->messageEntityItalic(
			offset : 49,
			length : 1,
		),
		$client->messageEntityCode(
			offset : 78,
			length : 81,
		),
		$client->messageEntityPre(
			offset : 56,
			length : 54,
			language : 'qSGUyI9K4fZY5dxt',
		),
		$client->messageEntityTextUrl(
			offset : 79,
			length : 61,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 27,
			length : 4,
			user_id : -6157981827667751801,
		),
		$client->inputMessageEntityMentionName(
			offset : 27,
			length : 77,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 90,
			length : 93,
		),
		$client->messageEntityCashtag(
			offset : 43,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 99,
			length : 24,
		),
		$client->messageEntityStrike(
			offset : 65,
			length : 43,
		),
		$client->messageEntityBankCard(
			offset : 8,
			length : 78,
		),
		$client->messageEntitySpoiler(
			offset : 45,
			length : 58,
		),
		$client->messageEntityCustomEmoji(
			offset : 96,
			length : 26,
			document_id : 8604561120737112153,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 47,
			length : 11,
		),
	),
	document : $client->documentEmpty(
		id : 8556194285806894039,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -2753439209707507010,
	),
);
```