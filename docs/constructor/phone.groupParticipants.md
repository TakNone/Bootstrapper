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
	count : 1,
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
				user_id : 5127684869486790580,
			),
			date : 71,
			active_date : 79,
			source : 99,
			volume : 17,
			about : '4QtGfJi5Y9nSozd7',
			raise_hand_rating : 4121689313625755764,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'R8Swc6PinCsT2uIX',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'qtaGJFiWSI3MCZgh',
						sources : array(77),
					),
				),
				audio_source : 93,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'kxJ2AY80PCIdVwrM',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'Ratn2fwqujNkMW5A',
						sources : array(52),
					),
				),
				audio_source : 19,
			),
			paid_stars_total : -3072866089795004503,
		),
	),
	next_offset : 'zGV9WXcBvmdJwplY',
	chats : array(
		$client->chatEmpty(
			id : 8755618078973811281,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6534382376000795504,
			title : 'IJaG4DW3xhZnd1tk',
			photo : $client->chatPhotoEmpty(),
			participants_count : 34,
			date : 72,
			version : 88,
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
				until_date : 55,
			),
		),
		$client->chatForbidden(
			id : -3645398007054530264,
			title : 'FAcuZoStUP09JDx7',
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
			id : -7515944950601839134,
			access_hash : 8229181560565995250,
			title : 'coh3GfOkJNMaHgVw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lwruTE8FkdhV3tBO',
					reason : 'hj1kUx9lMBEroSmv',
					text : 'oBp5vEqutlw40zkc',
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
				until_date : 8,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 11,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -2801484146035299529,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 495466867048494463,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 0,
			subscription_until_date : 9,
			bot_verification_icon : -1229606813297373647,
			send_paid_messages_stars : 2913525718042949913,
			linked_monoforum_id : -4618191337200042199,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4902891814282741396,
			access_hash : 2414726071847625788,
			title : 'NOU5LKDcFSsyTQxJ',
			until_date : 21,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1546852926761981648,
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
			id : 8349746031783577291,
			access_hash : -3259522635909031911,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0yVIcHvUXdna7gqr',
					reason : '1Ws8tBPHClDKbzUE',
					text : 'wUq7TaSi2XZENOxQ',
				),
			),
			bot_inline_placeholder : 'mqsjLP8R3kfygHMY',
			lang_code : '9T54ud3jKDYOxcV6',
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
				max_id : 77,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 1870443961567094788,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 6367500524225536867,
			),
			bot_active_users : 2,
			bot_verification_icon : -1728002492739055201,
			send_paid_messages_stars : 5317565459484211064,
		),
	),
	version : 99,
);
```