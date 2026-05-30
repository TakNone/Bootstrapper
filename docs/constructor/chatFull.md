# chatFull

**Description** : *Full info about a basic group*

**Layer** : 225

```tl
chatFull#2633421b flags:# can_set_username:flags.7?true has_scheduled:flags.8?true translations_disabled:flags.19?true id:long about:string participants:ChatParticipants chat_photo:flags.2?Photo notify_settings:PeerNotifySettings exported_invite:flags.13?ExportedChatInvite bot_info:flags.3?Vector<BotInfo> pinned_msg_id:flags.6?int folder_id:flags.11?int call:flags.12?InputGroupCall ttl_period:flags.14?int groupcall_default_join_as:flags.15?Peer theme_emoticon:flags.16?string requests_pending:flags.17?int recent_requesters:flags.17?Vector<long> available_reactions:flags.18?ChatReactions reactions_limit:flags.20?int = ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : -2358748010156568362,
	about : 'sYEPf81hM2NQrcVC',
	participants : $client->chatParticipantsForbidden(
		chat_id : 1442826753350650637,
		self_participant : $client->chatParticipant(
			user_id : 8437719615151710098,
			inviter_id : -7823148212280845633,
			date : 55,
			rank : 'hsOGEHTBybIN5FD6',
		),
	),
	chat_photo : $client->photoEmpty(
		id : 4984548461884397429,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 21,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	exported_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'WxbTKLOonhag1YPV',
		admin_id : 4382661786302356780,
		date : 34,
		start_date : 52,
		expire_date : 34,
		usage_limit : 52,
		usage : 82,
		requested : 91,
		subscription_expired : 81,
		title : 'zM7IeN8AOj4yiKtf',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 7,
			amount : 5700319613080094831,
		),
	),
	bot_info : array(
		$client->botInfo(
			has_preview_medias : true,
			user_id : 7552968533264904105,
			description : 'MPQclNJC2b5yOsHR',
			description_photo : $client->photoEmpty(
				id : -8270547766027712099,
			),
			description_document : $client->documentEmpty(
				id : 3500497879721826791,
			),
			commands : array(
				$client->botCommand(
					command : 'BuYFHEpPLiX5sSnd',
					description : 'Zh6nK1L37uzsMGE9',
				),
			),
			menu_button : $client->botMenuButtonDefault(),
			privacy_policy_url : 'https://docs.liveproto.dev',
			app_settings : $client->botAppSettings(
				placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				background_color : 53,
				background_dark_color : 4,
				header_color : 77,
				header_dark_color : 47,
			),
			verifier_settings : $client->botVerifierSettings(
				can_modify_custom_description : true,
				icon : 6071025957918801129,
				company : 'aigXLKzDoUMnpqmy',
				custom_description : 'K8FvgturhfnbMZsG',
			),
		),
	),
	pinned_msg_id : 77,
	folder_id : 93,
	call : $client->inputGroupCall(
		id : 2293853038747969013,
		access_hash : 8291246283884660576,
	),
	ttl_period : 45,
	groupcall_default_join_as : $client->peerUser(
		user_id : 7709216432083902181,
	),
	theme_emoticon : 'cwhDV71kunZCgEHY',
	requests_pending : 14,
	recent_requesters : array(-6055292610204398629),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 97,
);
```