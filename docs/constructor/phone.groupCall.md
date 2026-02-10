# phone.groupCall

**Description** : *Contains info about a group call, and partial info about its participants*

**Layer** : 222

```tl
phone.groupCall#9e727aad call:GroupCall participants:Vector<GroupCallParticipant> participants_next_offset:string chats:Vector<Chat> users:Vector<User> = phone.GroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`GroupCall`](type/GroupCall) | Info about the group call |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | A partial list of participants |
| <mark>participants_next_offset</mark> | [`string`](type/string) | Next offset to use when fetching the remaining participants using phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the participants vector |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the participants vector |

---

## Type

[phone.GroupCall](type/phone.GroupCall)

---

## Example

```php
$phoneGroupCall = $client->phone->groupCall(
	call : $client->groupCallDiscarded(
		id : -3175958946286252331,
		access_hash : 3733841607709140969,
		duration : 67,
	),
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
				user_id : -2586199801974563731,
			),
			date : 37,
			active_date : 45,
			source : 19,
			volume : 8,
			about : 'M06gpfrbS9xdmTiG',
			raise_hand_rating : -4242485038015066188,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 's7Dp2mYCXhW1ztO8',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'J1SQmOqKIP6rpjec',
						sources : array(97),
					),
				),
				audio_source : 64,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'HZMjIkJdsigaOYob',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'yi5WXstZCbvg2k3I',
						sources : array(76),
					),
				),
				audio_source : 66,
			),
			paid_stars_total : -5974172503269927904,
		),
	),
	participants_next_offset : 'MO95FNJyvBksPLfE',
	chats : array(
		$client->chatEmpty(
			id : 4506264373600224185,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3043811990930137060,
			title : '4Os0vHdpBC1qYr2b',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 5,
			version : 85,
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
				until_date : 94,
			),
		),
		$client->chatForbidden(
			id : -6674842696719928295,
			title : 'YBD1cmN9RJ3zXhQK',
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
			id : 8099395975717501514,
			access_hash : 1263254683557035288,
			title : 'xauWs9NYmqjgEv04',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Bxw503FAN4QEHGMo',
					reason : 'uM0Q49zXLo5b8wmc',
					text : 'DcMI26YTwWyjUSdm',
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
				until_date : 72,
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
				until_date : 81,
			),
			participants_count : 63,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 3,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 1878341505219777559,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -4756923810229250695,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 11,
			bot_verification_icon : -9211584416997618126,
			send_paid_messages_stars : -4679700070270470030,
			linked_monoforum_id : -4665747538938629979,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 111689753606155650,
			access_hash : -8978951878697122862,
			title : 'GxbWCHA3cQmSNDKq',
			until_date : 68,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3444805039187248983,
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
			id : -2844357812702799712,
			access_hash : 6834580870561038663,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 65,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YKWPUoXpntFmIVQh',
					reason : 'dbnLrsAxeKO9kBiq',
					text : 'yxAc6s31kTrwjLM5',
				),
			),
			bot_inline_placeholder : 'DqHsKpWy7U0LaoB4',
			lang_code : 'lRHhyTbzDZkEOIdG',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 7036674074793620961,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 3140589608909441043,
			),
			bot_active_users : 59,
			bot_verification_icon : 1031830066306340183,
			send_paid_messages_stars : -6104449308336219314,
		),
	),
);
```