# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 214

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
			title : 'g3vfZrpVh0zLq5jl',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : -7443614156577999202,
				),
				$client->peerChat(
					chat_id : 3678626338456159294,
				),
				$client->peerChannel(
					channel_id : -7894040245861516925,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7620951314659350136,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6752953855275328754,
			title : 'cISa2XxUQNOYWyv0',
			photo : $client->chatPhotoEmpty(),
			participants_count : 20,
			date : 74,
			version : 33,
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
				until_date : 48,
			),
		),
		$client->chatForbidden(
			id : 4161575856467692245,
			title : '1UjmEznKqPLw9fN8',
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
			id : -1854447863612422517,
			access_hash : 2559026883860981930,
			title : 'zmMFEQsVWZI7bhyC',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'b3fA6xtUnHjyRpvG',
					reason : 'sp1KGT0CyM5c2t7e',
					text : 'RMZvn6WSjkiVmLgF',
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
				until_date : 11,
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
			participants_count : 95,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 49,
			color : $client->peerColor(
				color : 18,
				background_emoji_id : -2489037126716043308,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -2339501444351714035,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 19,
			subscription_until_date : 63,
			bot_verification_icon : -447590234471099098,
			send_paid_messages_stars : -4811862537985959943,
			linked_monoforum_id : -896807424684047489,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4973135105490069714,
			access_hash : -4432778041524722260,
			title : 'jVyOAzm2Y8extTGa',
			until_date : 82,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2241380270014313343,
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
			id : -5054107115803470661,
			access_hash : 8882871927964916372,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mEp9tCdD8ji5NrBZ',
					reason : '8wZuNhDGRsWbatcB',
					text : 'KxLlXwUiI5gCj2v4',
				),
			),
			bot_inline_placeholder : '5WLYGwn4AzJ0rVlM',
			lang_code : 'UqQhJsYZ1LSv8CGR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 4,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -3313831407211663796,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 2037601111243315975,
			),
			bot_active_users : 73,
			bot_verification_icon : -2281189341088960112,
			send_paid_messages_stars : 3774355028586441429,
		),
	),
);
```