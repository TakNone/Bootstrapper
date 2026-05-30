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
	count : 29,
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
				user_id : 1987084968865795306,
			),
			date : 100,
			active_date : 92,
			source : 94,
			volume : 15,
			about : '62h1BiUMDsmkTnNP',
			raise_hand_rating : 8650454255746398317,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '0W9AiL2dBaRugVbk',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'gFOLE4neoD9jubpc',
						sources : array(28),
					),
				),
				audio_source : 83,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'X4YhHAqsODmbPc3U',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'psY4GCHcyW6Zdv3T',
						sources : array(99),
					),
				),
				audio_source : 30,
			),
			paid_stars_total : 3340712240741061729,
		),
	),
	next_offset : '7uiHJ9Pv8lRaQKzq',
	chats : array(
		$client->chatEmpty(
			id : -4403386019866370938,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1757595019257834818,
			title : 'PpNLYqCQrUoxT2ns',
			photo : $client->chatPhotoEmpty(),
			participants_count : 99,
			date : 69,
			version : 41,
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
				until_date : 80,
			),
		),
		$client->chatForbidden(
			id : 1736669485374193484,
			title : 'oXtek9Z4jnfI16wW',
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
			id : 5886989431167037835,
			access_hash : -4805657911375869361,
			title : '2QRI8OjFseKAbyqG',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wuvQlLp8bDSy0aex',
					reason : 'BlUIajx4cNCP9nuQ',
					text : 'Q6GJBmAM2kntsoLX',
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
				until_date : 33,
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
				until_date : 97,
			),
			participants_count : 8,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 10,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 1498101591252249576,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : -9150396706953560331,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 57,
			subscription_until_date : 37,
			bot_verification_icon : -6538818191916315054,
			send_paid_messages_stars : 3186429677706969859,
			linked_monoforum_id : -8014845332779990533,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5229016566957013449,
			access_hash : -5044995279740174748,
			title : 'BKStwivg8YmXA4Gc',
			until_date : 17,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5230019148166240848,
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
			id : -5110847231669130685,
			access_hash : -1020419361359007430,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gCr9xvjpLz2DTUY7',
					reason : 's5XW9Jujo3qtfVEc',
					text : 'gzBqX6tik98x7Ver',
				),
			),
			bot_inline_placeholder : 'sP49gRKmBacF0Slh',
			lang_code : 'zfxL7wGZvyaMc4SU',
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
				max_id : 86,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : -3697199957769663515,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -9199604542104201640,
			),
			bot_active_users : 50,
			bot_verification_icon : 8950008784929714839,
			send_paid_messages_stars : -1455650288562867321,
		),
	),
	version : 61,
);
```