# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 229

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
	message : '9N06BeY3axEWHZwh',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 69,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 20,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 22,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 60,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 38,
			language : 'UBKViZR8qId4fO6b',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : 1309105408692739510,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 69,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 89,
			document_id : -7158698526361694388,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 27,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 44,
			date : 74,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 57,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 61,
			old_text : 'zOdFbNYM9Wyh603j',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 66,
		),
	),
);
```