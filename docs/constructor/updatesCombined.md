# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 214

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(...),
			),
			pts : 91,
			pts_count : 18,
		),
		$client->updateMessageID(
			id : 15,
			random_id : -7695384962436261686,
		),
		$client->updateDeleteMessages(
			messages : array(56),
			pts : 51,
			pts_count : 69,
		),
		$client->updateUserTyping(
			user_id : -9051744564855868330,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7404789573264019322,
			from_id : $client->peerUser(
				user_id : -6052478065363247663,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -8720876715937361555,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -8301517752108538184,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 3559534784523792590,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 71,
			device : 'Jjqvu6T8KwfZABPC',
			location : 'hy5eLSPasJ0nt6YN',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -5651207649702132397,
				chat_id : 28,
				date : 47,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 6,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 45,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 87,
			),
			date : 46,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 67,
			max_date : 32,
			date : 52,
		),
		$client->updateChatParticipantAdd(
			chat_id : -1378934624718731161,
			user_id : 5258438518046837500,
			inviter_id : 325216069433007984,
			date : 81,
			version : 72,
		),
		$client->updateChatParticipantDelete(
			chat_id : 1064414252278928882,
			user_id : -9014338527716138806,
			version : 3,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 82,
					ip_address : '127.0.0.1',
					port : 71,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 61,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 39,
			type : 'M7VnHyukBYGCvAOr',
			message : '6J53K7rHGwQBvygi',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 80,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 24,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 69,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 53,
					language : 'ju76qiFNTXgSpcvE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 60,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : 8977903129020674239,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 43,
					document_id : -1150442177945749525,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 1,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7524493161976732647),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1337835534830512379),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(1618038260979996867),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(7056046870844426150),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -7126735047962855108,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 23,
			peer : $client->peerUser(
				user_id : -7406913333174690615,
			),
			max_id : 31,
			still_unread_count : 41,
			pts : 53,
			pts_count : 52,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -1710901902933790489,
			),
			max_id : 36,
			pts : 80,
			pts_count : 22,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -1812151972345949868,
				url : 'https://docs.liveproto.dev',
			),
			pts : 77,
			pts_count : 0,
		),
		$client->updateReadMessagesContents(
			messages : array(64),
			pts : 19,
			pts_count : 54,
			date : 34,
		),
		$client->updateChannelTooLong(
			channel_id : 3434464392894058484,
			pts : 6,
		),
		$client->updateChannel(
			channel_id : 2730679786426556364,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
			pts : 76,
			pts_count : 28,
		),
		$client->updateReadChannelInbox(
			folder_id : 97,
			channel_id : -2866693762916298311,
			max_id : 35,
			still_unread_count : 60,
			pts : 48,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8338493337723725794,
			messages : array(54),
			pts : 55,
			pts_count : 42,
		),
		$client->updateChannelMessageViews(
			channel_id : -6746118674348005024,
			id : 100,
			views : 80,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5392552382783435184,
			user_id : 3111229173350830776,
			is_admin : true,
			version : 52,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(4619613996868749324),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 4965657137206291297,
			user_id : -5145543453071226499,
			query : 'C2XjDBhmGA3VWLeT',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'TmN2hLK3a68dJY7q',
		),
		$client->updateBotInlineSend(
			user_id : -2203424216725466394,
			query : 'e3mNrQRzDxfybSWO',
			geo : $client->geoPointEmpty(),
			id : 'Hji8nqEVzM5ybpk9',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 31,
				id : -5642776369952543203,
				access_hash : -3235089870828276852,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(...),
			),
			pts : 25,
			pts_count : 74,
		),
		$client->updateBotCallbackQuery(
			query_id : -2214540854433798216,
			user_id : 8315032593232072428,
			peer : $client->peerUser(
				user_id : -160274204778895084,
			),
			msg_id : 69,
			chat_instance : 717193848010057821,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'R6ygCnJ58lpQ4awT',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(...),
			),
			pts : 87,
			pts_count : 97,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 7938464288974547924,
			user_id : 5920494515264689526,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 90,
				id : 3239555348082772327,
				access_hash : -2696021984482364627,
			),
			chat_instance : -2172741503729440503,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'eRqBZjnXfwID1tMk',
		),
		$client->updateReadChannelOutbox(
			channel_id : -6960501554811252572,
			max_id : 88,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 2126190302180807117,
			),
			top_msg_id : 26,
			saved_peer_id : $client->peerUser(
				user_id : 2751502694571072198,
			),
			draft : $client->draftMessageEmpty(
				date : 94,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -4454556330850429304,
			webpage : $client->webPageEmpty(
				id : -4647247023429151463,
				url : 'https://docs.liveproto.dev',
			),
			pts : 69,
			pts_count : 44,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 0,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 58,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 43,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'bG2asI57ngpzlvTO',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5503472169199771791,
			data : $client->dataJSON(
				data : 'aKnXzgib0s3W9Rt6',
			),
			timeout : 59,
		),
		$client->updateBotShippingQuery(
			query_id : -1711793687855757799,
			user_id : -1041518444698660802,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'O9xcbsBfhjUdA5XZ',
				street_line2 : '96NLyeCtqGOVF8Sz',
				city : 'A8GyS7o30vKOwQjz',
				state : 'ZFhGCcNPSs9LrnUI',
				country_iso2 : 'eZqNXlfmIHO8bJvz',
				post_code : 'wVvbeR8Z0N93QH54',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -96000776025845514,
			user_id : -3351523129523097866,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'WjT7AY4Jlc1xQKhP',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : '17uDQPyVlLfkpIAh',
			currency : 'EcQtnVIDTXPhu9fL',
			total_amount : 49394368903350258,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 3028495830556970586,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'ejEb8SRyrXdAvacL',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '9U6ZNsAWI2ijdG8l',
				from_version : 13,
				version : 45,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -1241354310108936791,
			top_msg_id : 35,
			saved_peer_id : $client->peerUser(
				user_id : 4983159343162397498,
			),
			messages : array(32),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 2933321607843073283,
			available_min_id : 33,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 732538594420920325,
			),
		),
		$client->updateMessagePoll(
			poll_id : 7763997279130048352,
			poll : $client->poll(
				id : 3914984151981216409,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 92,
				close_date : 61,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 88,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'CsP4XnYJWwpuT8f6',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -842605199143137301,
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
				until_date : 96,
			),
			version : 97,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 15,
				),
			),
			pts : 37,
			pts_count : 20,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 2374826535948077728,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 13,
				request_chat_title : '0LUtYSOFp6GexW3r',
				request_chat_date : 15,
				business_bot_id : -4373507058671369185,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -2505184386848230897,
				registration_month : '0ZYlDvfUEwCR5AzK',
				phone_country : '+1234567890',
				name_change_date : 28,
				photo_change_date : 91,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 84,
					distance : 48,
				),
				$client->peerSelfLocated(
					expires : 11,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -3397382532908232580,
			),
			messages : array(1),
			sent_messages : array(45),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 1276439052345356434,
				access_hash : -6195373155266486098,
				slug : 's4qa2S1rdM9mXDey',
				title : '2CDFiBE7HAxRcXKw',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'Rxp7Ky4oSWMzL2Tj',
				installs_count : 34,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 8459123959200668306,
			),
			msg_id : 21,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -5317020729770862773,
			peer : $client->peerUser(
				user_id : 4676144825463879544,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 67,
		),
		$client->updateDialogFilter(
			id : 91,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 44,
				title : $client->textWithEntities(...),
				emoticon : 'wFB1p70LmW8EKzUG',
				color : 67,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(59),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -5701419124233109708,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -2624934378325685689,
			id : 64,
			forwards : 50,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2584654024799724347,
			top_msg_id : 97,
			read_max_id : 45,
			broadcast_id : 9143168144408916117,
			broadcast_post : 17,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 6491899514673230094,
			top_msg_id : 67,
			read_max_id : 36,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 5134141151170471116,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 8771231684106427335,
			top_msg_id : 8,
			from_id : $client->peerUser(
				user_id : 8773177587024093121,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -307347654049949609,
			),
			messages : array(30),
			pts : 65,
			pts_count : 3,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 3661841680625025118,
			messages : array(33),
			pts : 50,
			pts_count : 18,
		),
		$client->updateChat(
			chat_id : 7883891980477864055,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -1574523262227894892,
				access_hash : 2545345806507021740,
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
					peer : $client->peerUser(...),
					date : 97,
					active_date : 49,
					source : 82,
					volume : 62,
					about : 'WyKBV5U86sNmaH4G',
					raise_hand_rating : 8715993520492837750,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 82,
		),
		$client->updateGroupCall(
			chat_id : 6112917873724034732,
			call : $client->groupCallDiscarded(
				id : 851950721468936779,
				access_hash : -8111671900099486062,
				duration : 64,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 1956273001358903458,
			),
			ttl_period : 4,
		),
		$client->updateChatParticipant(
			chat_id : 4560097184879481923,
			date : 70,
			actor_id : -1726606609654290830,
			user_id : -8633057915691530601,
			prev_participant : $client->chatParticipant(
				user_id : -7550220872201357601,
				inviter_id : 4752813489299288829,
				date : 95,
			),
			new_participant : $client->chatParticipant(
				user_id : 3885617710522461822,
				inviter_id : 1313746174640792225,
				date : 76,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'kMhmcZd5lsHKFP0u',
				admin_id : 4181226222937678588,
				date : 36,
				start_date : 74,
				expire_date : 86,
				usage_limit : 53,
				usage : 81,
				requested : 26,
				subscription_expired : 37,
				title : 'NL7yKX9cxOUY3Ww1',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 25,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2399581357555273628,
			date : 78,
			actor_id : 7192241793606718604,
			user_id : 7240324608128351633,
			prev_participant : $client->channelParticipant(
				user_id : -979898582481066231,
				date : 79,
				subscription_until_date : 30,
			),
			new_participant : $client->channelParticipant(
				user_id : 6052802112177897208,
				date : 39,
				subscription_until_date : 98,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'EJqmaDgf2ubcNH5Z',
				admin_id : -104155991608654088,
				date : 52,
				start_date : 62,
				expire_date : 87,
				usage_limit : 20,
				usage : 13,
				requested : 55,
				subscription_expired : 16,
				title : 'G2QC7DfxyJmYrVOq',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 55,
		),
		$client->updateBotStopped(
			user_id : 4822970195021603291,
			date : 40,
			stopped : true,
			qts : 66,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'tYEcjwT4fl7VAN8M',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 7579429425113693227,
			),
			bot_id : -6983460309311149005,
			commands : array(
				$client->botCommand(
					command : '8ilGY1ZCAOStyPx9',
					description : 'eTSKPjsQnzWybdpR',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -4296702471850347265,
			),
			requests_pending : 23,
			recent_requesters : array(923227771976501205),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7358377640413779534,
			),
			date : 54,
			user_id : -8435248219564192687,
			about : 'PA1fc9rU8HhGRZtb',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'NhfO8cGuJWKBvXjD',
				admin_id : 3165851248103157425,
				date : 82,
				start_date : 98,
				expire_date : 31,
				usage_limit : 44,
				usage : 12,
				requested : 45,
				subscription_expired : 45,
				title : 'j4PZsotNeixbFc89',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 47,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 7432944288613313757,
			),
			msg_id : 94,
			top_msg_id : 15,
			saved_peer_id : $client->peerUser(
				user_id : 5836627741922528801,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5831682354782135560,
		),
		$client->updateBotMenuButton(
			bot_id : 7584275680943559612,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -1193243819778639236,
			),
			msg_id : 67,
			transcription_id : 1197315950602638185,
			text : 'ZhXQGl7Nvdq0MEiY',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -5463915388229182114,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -3076210272014543464,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -848715100320361016,
			),
			msg_id : 89,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 45,
					h : 88,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 98,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -1820919663323525122,
			topic_id : 78,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -9047718408011946377,
			order : array(13),
		),
		$client->updateUser(
			user_id : 2277937569779238299,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -4722014155669523317,
			),
			story : $client->storyItemDeleted(
				id : 94,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -2241561756242859198,
			),
			max_id : 87,
		),
		$client->updateStoryID(
			id : 29,
			random_id : -3278053231988455706,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 72,
				cooldown_until_date : 99,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 600235931399082726,
			),
			story_id : 30,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5545408508686596298,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'r96UCZuh21goxnq3',
				user_id : 7979971702176453450,
				giveaway_msg_id : 23,
				date : 79,
				expires : 3,
				used_gift_slug : '1BbqGFkw5ej3gSUd',
				multiplier : 72,
				stars : 2012157566634078115,
			),
			qts : 6,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -5001558296000716311,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -8173543800289167537,
			),
			wallpaper : $client->wallPaper(
				id : -3768309372439403613,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1801735849819328462,
				slug : 'lcIwfFtk1J7CZsqY',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -6818038744466795221,
			),
			msg_id : 74,
			date : 1,
			actor : $client->peerUser(
				user_id : -897394461994194807,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '4vG56JzZ9u8tUmaA',
				),
				$client->reactionCustomEmoji(
					document_id : 2016705047323262843,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'jAwVeP8z3X0gik2m',
				),
				$client->reactionCustomEmoji(
					document_id : 7943948009368426099,
				),
				$client->reactionPaid(),
			),
			qts : 99,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 3426744532912287394,
			),
			msg_id : 43,
			date : 27,
			reactions : array(
				$client->reactionCount(
					chosen_order : 26,
					reaction : $client->reactionEmpty(...),
					count : 83,
				),
			),
			qts : 57,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 66,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '32tsvS9DNkuiwbIY',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 98,
					shortcut : 'cbV32lqgZvFaHoAe',
					top_message : 24,
					count : 0,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 72,
				shortcut : 'jV4CU1lXsnwaRcuB',
				top_message : 68,
				count : 26,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 48,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 93,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 12,
			messages : array(53),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'Ey8JjRAMYtxmbXSF',
				user_id : 724122224094071497,
				dc_id : 19,
				date : 99,
				rights : $client->businessBotRights(...),
			),
			qts : 91,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'E7gqwP0Xsvymr4uG',
			message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			qts : 50,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'iGBErRPv0kd5uYNp',
			message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 31,
				peer_id : $client->peerUser(...),
			),
			qts : 43,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'imhnZQydBKADcXz7',
			peer : $client->peerUser(
				user_id : 7754241625122551228,
			),
			messages : array(100),
			qts : 14,
		),
		$client->updateNewStoryReaction(
			story_id : 84,
			peer : $client->peerUser(
				user_id : -4525786192131435524,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 4759428048327965607,
				nanos : 89,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 6837878238027140213,
			user_id : 5970723058016455987,
			connection_id : 'T0vOVDKcxMdNeYbl',
			message : $client->messageEmpty(
				id : 88,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 5042675609637405645,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 4658629133438923036,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 8,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 5692751785201604316,
			payload : 'cuHKIABSTvWjXqn8',
			qts : 40,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 9,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 5399675784647590973,
				access_hash : 2363188136108330016,
			),
			sub_chain_id : 89,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 6,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -1919148185855690912,
			saved_peer_id : $client->peerUser(
				user_id : -1999551758516041740,
			),
			read_max_id : 95,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2223988502909463129,
			saved_peer_id : $client->peerUser(
				user_id : -7913253161969831604,
			),
			read_max_id : 54,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5890919350237039412,
			saved_peer_id : $client->peerUser(
				user_id : -7319892998293871051,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 7790879558419282420,
			text : 'UgjpVfm8OM13R7qZ',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 2143197234154073170,
			payload : '6GZVKIFJPwylziLj',
			until_date : 33,
			qts : 67,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9152133026844883666,
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
			id : 4878779287810371287,
			access_hash : 2660980607374641755,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PFv9Jy6uqfUMOBaK',
					reason : 'lFtPXOBSN8kIWMgz',
					text : 'MJ1doO4acCW2pASl',
				),
			),
			bot_inline_placeholder : 'sbl9kpLXH3MoyJih',
			lang_code : 'YeRohUMWwiI9uZOb',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 87,
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 8149623909921077124,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 9213789711806332562,
			),
			bot_active_users : 10,
			bot_verification_icon : -7332302725905932903,
			send_paid_messages_stars : 2820933008941441720,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4084561041366770822,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -924012203605412626,
			title : 'Gb1vPjJCz0sKSIZr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 0,
			date : 63,
			version : 73,
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
				until_date : 96,
			),
		),
		$client->chatForbidden(
			id : 7899724840513264815,
			title : 'jR1AZfJ9egiHdICB',
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
			id : -2153237998858515469,
			access_hash : -1628069850552381546,
			title : '6P2MbpOh5ovAcTke',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'U0KiQ982WOXYLwtb',
					reason : 'UXNLgCKSTdAYkH1Q',
					text : 'Ie0NPv9Jjyb1wEXS',
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
				until_date : 75,
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
			participants_count : 81,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 90,
				background_emoji_id : -3058875090444145229,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -18705554180831375,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 38,
			subscription_until_date : 92,
			bot_verification_icon : -8543263697115612314,
			send_paid_messages_stars : -2525508056136456973,
			linked_monoforum_id : 1672663191768665257,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3911260078689118447,
			access_hash : -7953965664455357131,
			title : 'hGHE46mAdnbrUYgQ',
			until_date : 28,
		),
	),
	date : 14,
	seq_start : 92,
	seq : 100,
);
```