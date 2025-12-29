# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 218

```tl
help.deepLinkInfo#6a4ee832 flags:# update_app:flags.0?true message:string entities:flags.1?Vector<MessageEntity> = help.DeepLinkInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **update_app** | [`flags.0?true`](type/true) | An update of the app is required to parse this link |
| <mark>message</mark> | [`string`](type/string) | Message to show to the user |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[help.DeepLinkInfo](type/help.DeepLinkInfo)

---

## Example

```php
$helpDeepLinkInfo = $client->help->deepLinkInfo(
	update_app : true,
	message : 'a6Zjnu8RGOex0YqN',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 11,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 37,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 34,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 12,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 90,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 65,
			language : 'e5E4mjlg8n96hscW',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 13,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : 7352004035962295772,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 13,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 99,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : -6197260208143337683,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 93,
		),
	),
);
```