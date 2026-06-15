# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 227

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
	message : 'aXlsoMUGuhypHOgR',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 71,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 11,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 37,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 67,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 58,
			language : 'RUs5wJj4cM9tzVBO',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : -2908505509656667614,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 50,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 49,
			document_id : 6201874977243666782,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 92,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 54,
			date : 24,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 73,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 90,
			old_text : 'oevfMIrpgZwx46Jy',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 24,
		),
	),
);
```