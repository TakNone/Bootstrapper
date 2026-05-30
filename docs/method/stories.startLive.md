# stories.startLive

**Layer** : 225

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
	caption : 'nOLFDkcWolf6C1ts',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 17,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 33,
			language : 'dsOyR3nfIp9tC2iA',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : -2597306976646790226,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 75,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 26,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 22,
			document_id : 6629734331471916300,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 1,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 67,
			date : 61,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 0,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 68,
			old_text : 'FjZmEd6CBUfv4Mpw',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 90,
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
			chats : array(-3599651616714673476),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(4646079982807061688),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -7255583275109454474,
	messages_enabled : true,
	send_paid_messages_stars : -65456727704223431,
);
```