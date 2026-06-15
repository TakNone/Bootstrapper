# stories.startLive

**Layer** : 227

```tl
stories.startLive#d069ccde flags:# pinned:flags.2?true noforwards:flags.4?true rtmp_stream:flags.5?true peer:InputPeer caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long messages_enabled:flags.6?Bool send_paid_messages_stars:flags.7?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.2?true`](type/true) | NOTHING |
| **noforwards** | [`flags.4?true`](type/true) | NOTHING |
| **rtmp_stream** | [`flags.5?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **caption** | [`flags.0?string`](type/string) | NOTHING |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| **messages_enabled** | [`flags.6?Bool`](type/Bool) | NOTHING |
| **send_paid_messages_stars** | [`flags.7?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->stories->startLive(
	pinned : true,
	noforwards : true,
	rtmp_stream : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	caption : 'WRYKdVj7LrPy1gGl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 34,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 27,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 26,
			language : 'erSP8o1fuaCqEH2Q',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 41,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 72,
			user_id : 7574579127991006411,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 1,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 23,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 21,
			document_id : 6478341879045669523,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 46,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 56,
			date : 49,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 31,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 0,
			old_text : 'tVJXDCu0sviAQOIL',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 25,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-3236853338266211705),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(187445939448717418),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -8218537636522342908,
	messages_enabled : true,
	send_paid_messages_stars : 84263219543489243,
);
```