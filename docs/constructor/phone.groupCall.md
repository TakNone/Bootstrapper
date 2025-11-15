# phone.groupCall

**Description** : *Contains info about a group call, and partial info about its participants*

**Layer** : 218

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
		id : -3569845830991740003,
		access_hash : 4329658038734888018,
		duration : 74,
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
				user_id : -4609162879517892425,
			),
			date : 50,
			active_date : 44,
			source : 93,
			volume : 84,
			about : '752EdIyDUgWA3nXh',
			raise_hand_rating : 8247944116600583087,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'z4ifP2wWtlLeQDqJ',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'rgwlOte8I5bd61Wo',
						sources : array(23),
					),
				),
				audio_source : 84,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Zb4h5Biojr3LD01f',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'YPORH14Mh35v0IbS',
						sources : array(24),
					),
				),
				audio_source : 34,
			),
			paid_stars_total : -7933189511818306662,
		),
	),
	participants_next_offset : '2xj6TeoGAcgIf0VL',
	chats : array(
		$client->chatEmpty(
			id : -2142958301465598795,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8687236773752964966,
			title : 'rZFRmtopuvs89SDc',
			photo : $client->chatPhotoEmpty(),
			participants_count : 0,
			date : 6,
			version : 77,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 84,
			),
		),
		$client->chatForbidden(
			id : 4886535141677579179,
			title : 'wu2F9onxyjALV0XO',
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
			id : -7261230752685414203,
			access_hash : 7573078141213059825,
			title : 'qhmp0IcHfa6YV8wo',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SqBDRhbzmi8t1ngV',
					reason : 'tawAY9ugfdvmelLD',
					text : 'R43xvQocm6t5SgUA',
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
				until_date : 87,
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
			participants_count : 83,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 14,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : 5523980759585464218,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 5855025194692493916,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 74,
			bot_verification_icon : -2982360242861742031,
			send_paid_messages_stars : -4283339728355685100,
			linked_monoforum_id : 7858067421612955905,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6458702573500398970,
			access_hash : -8240170129171273439,
			title : 'O9c5CyUPqZ8kngBN',
			until_date : 58,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9156372560297933109,
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
			id : 1400066446335164404,
			access_hash : 3883454526885932741,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YkTOfZ3rSizmWFKC',
					reason : 'ZXDrx7OnbT6hwcgd',
					text : 'bUWySYmpVNAjvOF7',
				),
			),
			bot_inline_placeholder : 'i2WVuLIAnOvRUpdo',
			lang_code : 'gktoHbaGczQUdKBO',
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
				max_id : 46,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : 3659916847675414401,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -7513042044435879414,
			),
			bot_active_users : 14,
			bot_verification_icon : 8938317480593371374,
			send_paid_messages_stars : -4753470988933485102,
		),
	),
);
```