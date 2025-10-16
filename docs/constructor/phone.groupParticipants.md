# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 216

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
	count : 38,
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
				user_id : 2671196904127516271,
			),
			date : 93,
			active_date : 78,
			source : 98,
			volume : 10,
			about : 'ec4Kgrm9nsyBG8VI',
			raise_hand_rating : -3286657864656756583,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'q0AVhxWF5D3UjIBn',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 55,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Llh4JWxH0qB1G7jm',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 87,
			),
		),
	),
	next_offset : 'crabsI6gGHfz3oD5',
	chats : array(
		$client->chatEmpty(
			id : -6728878950782247093,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7894591491981616014,
			title : 'K7po5bWZGmiaAUY6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 1,
			date : 72,
			version : 10,
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
				until_date : 20,
			),
		),
		$client->chatForbidden(
			id : 3073791518304173171,
			title : 'N7ev2q8a4PzgXrkh',
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
			id : 3317879511897782695,
			access_hash : -158990068153444138,
			title : 'VkQvRdu8eT56Mipw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cW509CzKNl2Vormp',
					reason : 'T3KdLiCgPcOaH5o9',
					text : 'CoUiAFgvwxZShG8N',
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
				until_date : 59,
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
				until_date : 50,
			),
			participants_count : 21,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 40,
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -3297740719516980324,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : -2200270110873565876,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 46,
			subscription_until_date : 41,
			bot_verification_icon : -4853188467360256191,
			send_paid_messages_stars : 2231122299160147626,
			linked_monoforum_id : -4774911535169426199,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -732577263397517691,
			access_hash : -6812176314316934977,
			title : 'BeCMgvNzTiRrKqjt',
			until_date : 37,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2571294743015326681,
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
			id : -7061014742114459790,
			access_hash : 4325081783752468674,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1CH7crdUW6mJEjYI',
					reason : 'ZLIzm9NFfaClh6rW',
					text : 'ZEG0tpTvDqhWcHur',
				),
			),
			bot_inline_placeholder : 'F6nuGbtPJYWiE1q8',
			lang_code : '4qPgUirNElpxnvLZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 92,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : 6988558107893642801,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : 3947149277188740046,
			),
			bot_active_users : 3,
			bot_verification_icon : 8676253970678699540,
			send_paid_messages_stars : -232250936144406337,
		),
	),
	version : 20,
);
```