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
	id : 22,
	version : 'X3qgmI4raHCY1tUF',
	text : 'JlN9VTp3zgIPUuxZ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 23,
			length : 65,
		),
		$client->messageEntityMention(
			offset : 54,
			length : 69,
		),
		$client->messageEntityHashtag(
			offset : 37,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 97,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 12,
			length : 9,
		),
		$client->messageEntityEmail(
			offset : 77,
			length : 9,
		),
		$client->messageEntityBold(
			offset : 94,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 78,
			length : 78,
		),
		$client->messageEntityCode(
			offset : 20,
			length : 53,
		),
		$client->messageEntityPre(
			offset : 45,
			length : 24,
			language : 'zoTJUdYcaKWBHfqy',
		),
		$client->messageEntityTextUrl(
			offset : 93,
			length : 93,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 94,
			length : 52,
			user_id : 5053722719295086735,
		),
		$client->inputMessageEntityMentionName(
			offset : 98,
			length : 84,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 39,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 5,
			length : 40,
		),
		$client->messageEntityUnderline(
			offset : 71,
			length : 24,
		),
		$client->messageEntityStrike(
			offset : 45,
			length : 1,
		),
		$client->messageEntityBankCard(
			offset : 57,
			length : 67,
		),
		$client->messageEntitySpoiler(
			offset : 11,
			length : 17,
		),
		$client->messageEntityCustomEmoji(
			offset : 95,
			length : 98,
			document_id : 8378347091412834763,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 29,
			length : 49,
		),
	),
	document : $client->documentEmpty(
		id : -7676662548109502925,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -123811493222906109,
	),
);
```