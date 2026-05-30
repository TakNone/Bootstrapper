# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 222

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
	message : 'lOxL134y9khquCNW',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 38,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 17,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 67,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 77,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 93,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 13,
			language : 'bSYcaogJ3dP9mAZU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 82,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : -2803755793030532559,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 21,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 24,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 34,
			document_id : -1836487433032715712,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 97,
		),
	),
);
```