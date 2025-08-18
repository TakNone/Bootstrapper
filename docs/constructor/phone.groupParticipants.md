# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 211

```tl
phone.groupParticipants#f47751b6 count:int participants:Vector<GroupCallParticipant> next_offset:string chats:Vector<Chat> users:Vector<User> version:int = phone.GroupParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of participants |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | List of participants |
| <mark>next_offset</mark> | [`string`](type/string) | If not empty, the specified list of participants is partial, and more participants can be fetched specifying this parameter as offset in phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>version</mark> | [`int`](type/int) | Version info |

---

## Type

[phone.GroupParticipants](type/phone.GroupParticipants)

---

## Example

```php
$phoneGroupParticipants = $client->phone->groupParticipants(
	count : 15,
	participants : array(
		$client->groupCallParticipant(
			muted : true,
			left : true,
			can_self_unmute : true,
			just_joined : true,
			versioned : true,
			min : true,
			muted_by_you : true,
			volume_by_admin : true,
			self : true,
			video_joined : true,
			peer : $client->peerUser(
				user_id : -7038084691496600072,
			),
			date : 84,
			active_date : 78,
			source : 60,
			volume : 88,
			about : 'KtH4ys9qFM71dOZm',
			raise_hand_rating : 6653165671360624434,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'zZUWKamfJ6GwhktQ',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 11,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'DsQuUevOCqVMSxWR',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 57,
			),
		),
	),
	next_offset : 'wsTXIr1fx3VvFWOp',
	chats : array(
		$client->chatEmpty(
			id : -6704476500691645507,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8630318071971531778,
			title : 'V2IwUjso39uNq1Gp',
			photo : $client->chatPhotoEmpty(),
			participants_count : 70,
			date : 92,
			version : 41,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 63,
			),
		),
		$client->chatForbidden(
			id : -3977338193247163122,
			title : 'LiPZNWEthfuM4rnq',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -8213435409064608007,
			access_hash : 7528740099509563592,
			title : 'mTfdWJjYuZpnKh9r',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QLfJ5hVgSiRNPUOY',
					reason : 'LxKyHQEi4pBWsIjt',
					text : '2wJrvQU5pYjKaO6T',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 70,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 40,
			),
			participants_count : 5,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 92,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 3273233833682845916,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -9005838587672319759,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 3,
			bot_verification_icon : -321854004182775503,
			send_paid_messages_stars : 6501793406388799746,
			linked_monoforum_id : -7538628971062131685,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3940181296407907553,
			access_hash : 8448274863734744289,
			title : 'KUND46ycEaOguQZk',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3404928797421372498,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : 766191937376438776,
			access_hash : -4532121429456507919,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8XLGmPy5RZQ7nBCJ',
					reason : '3C4vWfYwsdaerb8c',
					text : 'n1L7pABUe3QYZujf',
				),
			),
			bot_inline_placeholder : 'W0bVXCok24JdsNev',
			lang_code : 'xZKYFEbH10wSdUTk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 44,
			color : $client->peerColor(
				color : 99,
				background_emoji_id : 8211374202826374360,
			),
			profile_color : $client->peerColor(
				color : 29,
				background_emoji_id : -7417778944026997710,
			),
			bot_active_users : 89,
			bot_verification_icon : 3643474859238510942,
			send_paid_messages_stars : -4207623392801104500,
		),
	),
	version : 48,
);
```