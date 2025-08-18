# chatFull

**Description** : *Full info about a basic group*

**Layer** : 211

```tl
chatFull#2633421b flags:# can_set_username:flags.7?true has_scheduled:flags.8?true translations_disabled:flags.19?true id:long about:string participants:ChatParticipants chat_photo:flags.2?Photo notify_settings:PeerNotifySettings exported_invite:flags.13?ExportedChatInvite bot_info:flags.3?Vector<BotInfo> pinned_msg_id:flags.6?int folder_id:flags.11?int call:flags.12?InputGroupCall ttl_period:flags.14?int groupcall_default_join_as:flags.15?Peer theme_emoticon:flags.16?string requests_pending:flags.17?int recent_requesters:flags.17?Vector<long> available_reactions:flags.18?ChatReactions reactions_limit:flags.20?int = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_set_username** | [`flags.7?true`](type/true) | Can we change the username of this chat |
| **has_scheduled** | [`flags.8?true`](type/true) | Whether scheduled messages are available |
| **translations_disabled** | [`flags.19?true`](type/true) | Whether the real-time chat translation popup should be hidden |
| <mark>id</mark> | [`long`](type/long) | ID of the chat |
| <mark>about</mark> | [`string`](type/string) | About string for this chat |
| <mark>participants</mark> | [`ChatParticipants`](type/ChatParticipants) | Participant list |
| **chat_photo** | [`flags.2?Photo`](type/Photo) | Chat photo |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **exported_invite** | [`flags.13?ExportedChatInvite`](type/ExportedChatInvite) | Chat invite |
| **bot_info** | [`flags.3?Vector<BotInfo>`](type/BotInfo) | Info about bots that are in this chat |
| **pinned_msg_id** | [`flags.6?int`](type/int) | Message ID of the last pinned message |
| **folder_id** | [`flags.11?int`](type/int) | Peer folder ID, for more info click here |
| **call** | [`flags.12?InputGroupCall`](type/InputGroupCall) | Group call information |
| **ttl_period** | [`flags.14?int`](type/int) | Time-To-Live of messages sent by the current user to this chat |
| **groupcall_default_join_as** | [`flags.15?Peer`](type/Peer) | When using phone.getGroupCallJoinAs to get a list of peers that can be used to join a group call, this field indicates the peer that should be selected by default |
| **theme_emoticon** | [`flags.16?string`](type/string) | Emoji representing a specific chat theme |
| **requests_pending** | [`flags.17?int`](type/int) | Pending join requests » |
| **recent_requesters** | [`flags.17?Vector<long>`](type/long) | IDs of users who requested to join recently |
| **available_reactions** | [`flags.18?ChatReactions`](type/ChatReactions) | Allowed message reactions » |
| **reactions_limit** | [`flags.20?int`](type/int) | This flag may be used to impose a custom limit of unique reactions (i.e. a customizable version of appConfig.reactions_uniq_max) |

---

## Type

[ChatFull](type/ChatFull)

---

## Example

```php
$chatFull = $client->chatFull(
	can_set_username : true,
	has_scheduled : true,
	translations_disabled : true,
	id : 2841452313363052812,
	about : 'gv7e4ONDIx0pnmFX',
	participants : $client->chatParticipantsForbidden(
		chat_id : 5686052353258749451,
		self_participant : $client->chatParticipant(
			user_id : 7580414336874012194,
			inviter_id : 8865352933529912382,
			date : 81,
		),
	),
	chat_photo : $client->photoEmpty(
		id : -4324452516108658480,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 81,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'QcJxrwFX7mnBDKq6',
		admin_id : 4244331148338858026,
		date : 8,
		start_date : 41,
		expire_date : 51,
		usage_limit : 47,
		usage : 21,
		requested : 1,
		subscription_expired : 29,
		title : 'bROF5vSnCAT2PrZ4',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 90,
			amount : -907952037084121118,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : -2468313639944039297,
			description : 'OWM1DocBIsL8PXjG',
			description_photo : $client->photoEmpty(
				id : -6277802084374475785,
			),
			description_document : $client->documentEmpty(
				id : 6954928797884049925,
			),
			commands : array(
				$client->botCommand(
					command : 'opTCBqki92ugcd4O',
					description : 'fkS7FjPeQv34UgBE',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : '?PO?LiveProtoGATU?',
				background_color : 26,
				background_dark_color : 54,
				header_color : 76,
				header_dark_color : 50,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : -807797660455703528,
				company : 'J52KE1OpwfQ4u7Nt',
				custom_description : 'DgWpsnSlFILzcQjG',
			),
		),
	),
	pinned_msg_id : 19,
	folder_id : 60,
	call : $client->inputGroupCall(
		id : -331078017468453616,
		access_hash : 5536812063089884519,
	),
	ttl_period : 33,
	groupcall_default_join_as : $client->peerUser(
		user_id : -6449406543716184930,
	),
	theme_emoticon : '2UFEikDKBP1jSXnY',
	requests_pending : 13,
	recent_requesters : array(3242789639691577406),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 63,
);
```