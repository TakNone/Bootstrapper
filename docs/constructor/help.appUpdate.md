# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 222

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 93,
	version : 'dpW9hqYLjRvOEBSw',
	text : 'BQjk0rpIqVXWJ5wm',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 98,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 82,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 89,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 2,
			language : '0Gk961oRHfKqbuXQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 8,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 13,
			user_id : 8568477038058150013,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 76,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 31,
			document_id : -3486860348538955246,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
		),
	),
	document : $client->documentEmpty(
		id : -7746094771983487226,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : 252775820605969136,
	),
);
```