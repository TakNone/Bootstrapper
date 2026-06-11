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
	message : 'K4mCtvo9whZR6gSA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 17,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 57,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 55,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 1,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 40,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 58,
			language : 'IPUELDT6Hoqz8gbu',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 80,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : -5324446426948626103,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 12,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 35,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 44,
			document_id : 1325355052179270129,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 81,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 0,
			date : 32,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 36,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 25,
			old_text : 'UJlrGtSF3cxuzyMo',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 59,
		),
	),
);
```