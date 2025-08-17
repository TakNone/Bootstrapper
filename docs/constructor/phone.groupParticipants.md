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
	count : 28,
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
				user_id : -913126500790189259,
			),
			date : 68,
			active_date : 56,
			source : 94,
			volume : 44,
			about : 'P5HZD1qUIO47S9XR',
			raise_hand_rating : 7762620480653768486,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'kCz1S9Z3UQd4Wh0s',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 62,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'uzA3dLViK9exbJol',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 21,
			),
		),
	),
	next_offset : 'IGSLc4DAwiKTuQyM',
	chats : array(
		$client->chatEmpty(
			id : -8654693273795899562,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7632500591733153726,
			title : 'CB16oIOtA0enduwH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 63,
			date : 54,
			version : 69,
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
				until_date : 38,
			),
		),
		$client->chatForbidden(
			id : 6006698977404919153,
			title : 'jaDUItw7JZQ50lF8',
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
			id : -4934092500870052704,
			access_hash : 7715509523057334647,
			title : '8rBN9HtDSOAU2Klx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9QjkDotErlnmxv17',
					reason : '6l3fe8NTPDBVWjOM',
					text : 'CH0ExAG8TreRBX4j',
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
				until_date : 69,
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
			participants_count : 4,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 20,
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 6591401855744615949,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 5649915221418918708,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 31,
			subscription_until_date : 88,
			bot_verification_icon : 78871130597268544,
			send_paid_messages_stars : -4583646287268889351,
			linked_monoforum_id : -7108480546743012532,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6640099941186932156,
			access_hash : -1821099466257986350,
			title : 'ndPHtlmZINshVazJ',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1220717602299251881,
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
			id : -1079711932774691848,
			access_hash : -3822071350453762675,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Rxw9hnq8lQOtMGS5',
					reason : '6I4CBO9jKa5hNZUW',
					text : 'td9QehsBDnpO5jAi',
				),
			),
			bot_inline_placeholder : 'kouQ0eBiRb6JhVKr',
			lang_code : 'JrGcXZPDjQeFHuOg',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -3653149207660207132,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -1344710486342360927,
			),
			bot_active_users : 41,
			bot_verification_icon : -5669472096736880299,
			send_paid_messages_stars : -5261461537827375226,
		),
	),
	version : 95,
);
```