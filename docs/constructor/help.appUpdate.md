# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 218

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
	id : 24,
	version : 'CV4FbEizt6pyruLe',
	text : 'xyqhfNeo7vzZtj9r',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 62,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 44,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 17,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 77,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 26,
			language : 'eF3ERyahQM2g7UVG',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : 2927826458999186440,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 69,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 14,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 77,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : -5661988772429786783,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 89,
		),
	),
	document : $client->documentEmpty(
		id : 1353235974116779075,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -3996899015125103015,
	),
);
```