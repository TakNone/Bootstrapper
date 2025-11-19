# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 218

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
				user_id : -823300687679918826,
			),
			date : 94,
			active_date : 1,
			source : 35,
			volume : 5,
			about : 'cQNrZVawFUbl01nL',
			raise_hand_rating : -4882151269864634313,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'zuExSlZkBRgHJcG7',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'CSyOqaFzhf6iLBbI',
						sources : array(87),
					),
				),
				audio_source : 65,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '9ZB1NSIMiGp6xowb',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'KplJQetm58Siu27j',
						sources : array(47),
					),
				),
				audio_source : 9,
			),
			paid_stars_total : 8534963793924578528,
		),
	),
	next_offset : 'GoVxyFUHh6vKR14S',
	chats : array(
		$client->chatEmpty(
			id : 638182431427957296,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1329918803145238169,
			title : 'G7eWZSjE9UXcolTt',
			photo : $client->chatPhotoEmpty(),
			participants_count : 72,
			date : 6,
			version : 73,
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
				until_date : 21,
			),
		),
		$client->chatForbidden(
			id : 3363631630056385212,
			title : 'QJ3Rna95wD8SlMOA',
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
			id : -106805023506453327,
			access_hash : -4498364780479774023,
			title : 'J26zMrcAwgI4PKSW',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'P9jhkeF6sHxVTbqM',
					reason : 'C8bBKFTAVYXZyGdg',
					text : 'FCTSaNOqGoz6Kx9u',
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
				until_date : 39,
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
				until_date : 72,
			),
			participants_count : 65,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 72,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 6522594366119450802,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -4755711981857428507,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 96,
			subscription_until_date : 15,
			bot_verification_icon : 7406170806789834780,
			send_paid_messages_stars : -5353882584818442928,
			linked_monoforum_id : 2965596202837131282,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5207213802707321556,
			access_hash : 7655986170004020665,
			title : 'lOcuFCgRMPSYpo4i',
			until_date : 20,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2680445537966795143,
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
			id : -5514373575802576149,
			access_hash : 1132808098486643812,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Q5hy6U9JxwHkCVit',
					reason : '0QByaihSGTtkEoHD',
					text : 'X1LKBoGrjtOYuqRF',
				),
			),
			bot_inline_placeholder : 'mX6Oz4KqPtaYfbQC',
			lang_code : 'PgAfVRL4GiWOv2Nh',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 6743854447930897122,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -2607668240314690731,
			),
			bot_active_users : 93,
			bot_verification_icon : 7376584532808622519,
			send_paid_messages_stars : 2454626037794942932,
		),
	),
	version : 3,
);
```