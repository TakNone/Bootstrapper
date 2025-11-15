# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 218

```tl
chatlists.exportedInvites#10ab6dc7 invites:Vector<ExportedChatlistInvite> chats:Vector<Chat> users:Vector<User> = chatlists.ExportedInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invites</mark> | [`Vector<ExportedChatlistInvite>`](type/ExportedChatlistInvite) | The chat folder deep links » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ExportedInvites](type/chatlists.ExportedInvites)

---

## Example

```php
$chatlistsExportedInvites = $client->chatlists->exportedInvites(
	invites : array(
		$client->exportedChatlistInvite(
			revoked : true,
			title : 'l39knEbRO8GcQBgW',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : -9133996879998860463,
				),
				$client->peerChat(
					chat_id : 4770600546467122106,
				),
				$client->peerChannel(
					channel_id : -8538325786383318768,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3552384836495088592,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5131681709582979957,
			title : 'Cwc4rJqit65RukGA',
			photo : $client->chatPhotoEmpty(),
			participants_count : 2,
			date : 44,
			version : 38,
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
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : -2945680988394998126,
			title : 'yanxlLF0BtSODfok',
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
			id : 97998698087866983,
			access_hash : 476069155707886960,
			title : 'Mi7S6PNoGju9tam8',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ic27PKBuNbAELlzr',
					reason : 'Lfk1JCIw9y5lOVMn',
					text : 'NfBzRedrQsuJ3TCk',
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
				until_date : 97,
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
				until_date : 24,
			),
			participants_count : 1,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 28,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 8909483019605569074,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -4978138266973964525,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 50,
			bot_verification_icon : 2481650425808094752,
			send_paid_messages_stars : 4238047021672211593,
			linked_monoforum_id : 8232970473748521019,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1829913627956363528,
			access_hash : -7575050621996265013,
			title : 'DVqICpeixPnQbSwE',
			until_date : 7,
		),
	),
	users : array(
		$client->userEmpty(
			id : 667221120864375477,
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
			id : 8677289844924689292,
			access_hash : -5081941273086649834,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l4rT9cBIJKvAHk50',
					reason : 'DpTjc9wzWZCOsB74',
					text : '1ao7jA2YeqfNQ3ug',
				),
			),
			bot_inline_placeholder : 'oh0gUzvtLeMpy7G3',
			lang_code : 'cLRZJEvBbn9ArmCl',
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
				max_id : 74,
			),
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 6064365650344587417,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 6734826622730185254,
			),
			bot_active_users : 76,
			bot_verification_icon : 5546197449589502574,
			send_paid_messages_stars : -7359110845846741322,
		),
	),
);
```