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
	caption : 'x9ygcvzlo5t4ish2',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 33,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 15,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 82,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 36,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 99,
			language : '3yK1caJxGofjhi5Q',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 87,
			user_id : 4651689170115560391,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 53,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 12,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 75,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : -531972018626910592,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 99,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 14,
			date : 71,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 80,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 10,
			old_text : 'SvRHQnDyIFqkeGf7',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 18,
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
			chats : array(4422136656452752797),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(2623695843630543526),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 6674211207120334041,
	messages_enabled : true,
	send_paid_messages_stars : -8715025128109124863,
);
```