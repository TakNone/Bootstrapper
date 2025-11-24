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
	id : 19,
	version : 'YIQszLKk5PjqciUr',
	text : 'wLvro3MhN1pySU8d',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 75,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 49,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 100,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : 'gw9jB48HT3xpr7vV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 93,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : 7634377030837988826,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 4,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 31,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : -1188654662957733358,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 12,
		),
	),
	document : $client->documentEmpty(
		id : 4597621418572901026,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -2228846449117181258,
	),
);
```