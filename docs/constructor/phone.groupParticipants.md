# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 222

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
	count : 16,
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
				user_id : 7304420349175411491,
			),
			date : 1,
			active_date : 72,
			source : 86,
			volume : 78,
			about : 'WFeZXNMCrqa83QcH',
			raise_hand_rating : 6718234321836169952,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Im3UvqVhnFNcDByR',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'QEJwt7pMPhSBKiOk',
						sources : array(48),
					),
				),
				audio_source : 3,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'JdSAbNBLPXtYxnhK',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'Ry7Z4MnD0OxFvY9g',
						sources : array(21),
					),
				),
				audio_source : 30,
			),
			paid_stars_total : -2719802782740765259,
		),
	),
	next_offset : '1aopQsgrCGc9SBX7',
	chats : array(
		$client->chatEmpty(
			id : 2555422044617523371,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5353186129321339007,
			title : '08bJ5IfR4jdk6AMm',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 58,
			version : 67,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 6326042744120371953,
			title : 'Szlb5njMQKwTZkF9',
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
			id : -9016521479203255245,
			access_hash : -9188361002506560943,
			title : 'Jky9YWOemrDV0GHq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ecVS03xaB1Rk9YPG',
					reason : 'OKIHVL6isTt2krSh',
					text : 'Rvx1Pe2g79dhQufE',
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
				until_date : 23,
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
				until_date : 10,
			),
			participants_count : 70,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 8,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -2900028641348359248,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -2028971569388790085,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 12,
			subscription_until_date : 32,
			bot_verification_icon : 5738692838318405842,
			send_paid_messages_stars : -5524644938987283489,
			linked_monoforum_id : 5495071662216909646,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1438509710109043244,
			access_hash : 2154032521039450320,
			title : 'jmKJpcCeES9xNLYb',
			until_date : 8,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9219322340330346185,
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
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			id : -3806341242322041562,
			access_hash : -3779467027371738528,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3LujDwovz497hbIF',
					reason : 'JbsqOYm1Cf54IFiZ',
					text : '3skQpMoT2qwR1LGb',
				),
			),
			bot_inline_placeholder : 'vTUjopQrVZyO56Yd',
			lang_code : 'kc3CnjZKNU0LwFbT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 41,
			),
			color : $client->peerColor(
				color : 65,
				background_emoji_id : -7140477668584878182,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : -4624320422464083584,
			),
			bot_active_users : 31,
			bot_verification_icon : -8697605878705781178,
			send_paid_messages_stars : 2839154795383178624,
		),
	),
	version : 36,
);
```