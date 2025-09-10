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
				id : 64,
				peer_id : $client->peerUser(...),
			),
			pts : 20,
			pts_count : 46,
		),
		$client->updateMessageID(
			id : 95,
			random_id : 455105265823085449,
		),
		$client->updateDeleteMessages(
			messages : array(21),
			pts : 89,
			pts_count : 26,
		),
		$client->updateUserTyping(
			user_id : 4653433113177036168,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 6340138100070888964,
			from_id : $client->peerUser(
				user_id : -7041649159190513260,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -5043099329517998260,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 4085881027980498428,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 2016350383243958917,
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
			hash : 3842543675561834555,
			date : 36,
			device : 'SdFV9WOYygIbKrH8',
			location : '8Mo3re0wKP9Zs6CW',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 8487950091468054768,
				chat_id : 22,
				date : 44,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 31,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 50,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 27,
			),
			date : 89,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 34,
			max_date : 88,
			date : 6,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1462429090792250602,
			user_id : -6582974370324660245,
			inviter_id : -7464355137085101996,
			date : 86,
			version : 13,
		),
		$client->updateChatParticipantDelete(
			chat_id : -9023349695705259030,
			user_id : 7420588231301362526,
			version : 60,
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
					id : 13,
					ip_address : '127.0.0.1',
					port : 12,
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
				mute_until : 24,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 38,
			type : '902SkjHKAcqOxedi',
			message : 'iZMF81qhzH02rtm7',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 1,
					length : 41,
				),
				$client->messageEntityMention(
					offset : 43,
					length : 13,
				),
				$client->messageEntityHashtag(
					offset : 52,
					length : 66,
				),
				$client->messageEntityBotCommand(
					offset : 1,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 13,
					length : 85,
				),
				$client->messageEntityEmail(
					offset : 51,
					length : 96,
				),
				$client->messageEntityBold(
					offset : 5,
					length : 72,
				),
				$client->messageEntityItalic(
					offset : 84,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 95,
					length : 52,
				),
				$client->messageEntityPre(
					offset : 95,
					length : 66,
					language : 'KtMp5Oos2ZVHxLYn',
				),
				$client->messageEntityTextUrl(
					offset : 71,
					length : 72,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 72,
					length : 43,
					user_id : 307748678352361348,
				),
				$client->inputMessageEntityMentionName(
					offset : 65,
					length : 87,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 81,
					length : 100,
				),
				$client->messageEntityCashtag(
					offset : 82,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 16,
					length : 35,
				),
				$client->messageEntityStrike(
					offset : 36,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 25,
					length : 0,
				),
				$client->messageEntitySpoiler(
					offset : 38,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 27,
					length : 12,
					document_id : -3882073653341659342,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 52,
					length : 21,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(3219295470795634274),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1688621846844160477),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-1025209096619952536),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-6729312254185718923),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -3453200185418754505,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 13,
			peer : $client->peerUser(
				user_id : -7712019086986160367,
			),
			max_id : 62,
			still_unread_count : 50,
			pts : 75,
			pts_count : 51,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -7236835961515524299,
			),
			max_id : 79,
			pts : 53,
			pts_count : 46,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7754017473781807782,
				url : 'https://docs.liveproto.dev',
			),
			pts : 27,
			pts_count : 76,
		),
		$client->updateReadMessagesContents(
			messages : array(51),
			pts : 34,
			pts_count : 34,
			date : 75,
		),
		$client->updateChannelTooLong(
			channel_id : -8822325093012122730,
			pts : 17,
		),
		$client->updateChannel(
			channel_id : 5502389483368949515,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(...),
			),
			pts : 70,
			pts_count : 91,
		),
		$client->updateReadChannelInbox(
			folder_id : 73,
			channel_id : -9045776237860994656,
			max_id : 5,
			still_unread_count : 16,
			pts : 87,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8175582718632612025,
			messages : array(72),
			pts : 5,
			pts_count : 49,
		),
		$client->updateChannelMessageViews(
			channel_id : -1987626382496762775,
			id : 21,
			views : 93,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 2355168679174525018,
			user_id : 6161987535081602067,
			is_admin : true,
			version : 59,
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
			order : array(-5998638296190488850),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -7262915592000723659,
			user_id : -3391668871866294938,
			query : '5KCGWoVExN1hefts',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'CGzy2qY8wiBmPDeS',
		),
		$client->updateBotInlineSend(
			user_id : -2303812679120300140,
			query : 'QLS0Nul2krMz4xeA',
			geo : $client->geoPointEmpty(),
			id : 'FqbaXOtS73zx5pdv',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 73,
				id : 6104002250314235075,
				access_hash : -3630686360515309686,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
			pts : 76,
			pts_count : 28,
		),
		$client->updateBotCallbackQuery(
			query_id : -7372032728876667707,
			user_id : -103830569693153221,
			peer : $client->peerUser(
				user_id : -558949707159214217,
			),
			msg_id : 71,
			chat_instance : -7581442706030076904,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'uQTOIrq27YtoUbhX',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(...),
			),
			pts : 44,
			pts_count : 65,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -6000848007649657754,
			user_id : -1108269280553472555,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 80,
				id : -5372292027566354896,
				access_hash : -1821466658650498177,
			),
			chat_instance : 4152049238831211544,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'csBUMj0rISi6LmKb',
		),
		$client->updateReadChannelOutbox(
			channel_id : 9198383938207398734,
			max_id : 27,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 3028942239621751503,
			),
			top_msg_id : 89,
			saved_peer_id : $client->peerUser(
				user_id : 8905562915299425590,
			),
			draft : $client->draftMessageEmpty(
				date : 82,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8459074281222109430,
			webpage : $client->webPageEmpty(
				id : -4771769538589577159,
				url : 'https://docs.liveproto.dev',
			),
			pts : 60,
			pts_count : 38,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 61,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 74,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 69,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'yFPHmugaJELhKI4N',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -5091813687613191982,
			data : $client->dataJSON(
				data : 'KtcXa38ozMNFP0Rw',
			),
			timeout : 4,
		),
		$client->updateBotShippingQuery(
			query_id : -6477649838630896025,
			user_id : 7452621760262307339,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'iF6W7UoxXcvGgBr8',
				street_line2 : 'TDos91hAydYBOXl5',
				city : 'hk4XNLSZgHOzPiQY',
				state : 'qXQZsHud63k4Rzlx',
				country_iso2 : 'qpTc2dmyUJMfVGPX',
				post_code : 'aos7qE9QTwDr8Cnk',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5309043483210494169,
			user_id : -395691039082843713,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'keXf3a9LJ4xrTDg6',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'IoqsbNneLHvcTju9',
			currency : 'J3lgf9j2YGbPDIKN',
			total_amount : -420607891309188773,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -5901464468656788748,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '6csWSZoHifPVrCXu',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'i9VP6ZmUb0yNGaOc',
				from_version : 44,
				version : 15,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -775951354504369047,
			top_msg_id : 50,
			saved_peer_id : $client->peerUser(
				user_id : 2626688177740994415,
			),
			messages : array(73),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 3203891474053891636,
			available_min_id : 91,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 3107293150819611484,
			),
		),
		$client->updateMessagePoll(
			poll_id : -8428421230449655859,
			poll : $client->poll(
				id : 109581195567477072,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 21,
				close_date : 12,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 81,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'h0YbALk8lN92q4ox',
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
				user_id : -4908437342210759865,
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
				until_date : 32,
			),
			version : 1,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 82,
				),
			),
			pts : 90,
			pts_count : 62,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -2829734402501138398,
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
				geo_distance : 11,
				request_chat_title : 'TDQBNhs96P3lu7Oj',
				request_chat_date : 87,
				business_bot_id : -9140978794546159685,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -6081023998357592643,
				registration_month : 'oGkYRB9dZwUyfcVQ',
				phone_country : '+1234567890',
				name_change_date : 86,
				photo_change_date : 73,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 62,
					distance : 51,
				),
				$client->peerSelfLocated(
					expires : 56,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 5662274881896715612,
			),
			messages : array(56),
			sent_messages : array(85),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1992913790761079543,
				access_hash : 9158470796481595917,
				slug : 'wzyTc9idmY3BG08K',
				title : 'jOh0aMed3NUVuwCW',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : '6GvqIb75TAUKjoBM',
				installs_count : 89,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 2131197328047994502,
			),
			msg_id : 24,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -6919804021403153950,
			peer : $client->peerUser(
				user_id : 5293430535608030750,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 36,
		),
		$client->updateDialogFilter(
			id : 30,
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
				id : 65,
				title : $client->textWithEntities(...),
				emoticon : 'HFvqp8PIsgbraWMy',
				color : 99,
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
			order : array(52),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 2730326081372106853,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 3050383476914425833,
			id : 52,
			forwards : 37,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -3249005847707332773,
			top_msg_id : 18,
			read_max_id : 60,
			broadcast_id : 6846058958179713048,
			broadcast_post : 39,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4475144839971956342,
			top_msg_id : 45,
			read_max_id : 84,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 4122038034871382999,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1878465558078291540,
			top_msg_id : 76,
			from_id : $client->peerUser(
				user_id : 5922720099202865778,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1458291176666956297,
			),
			messages : array(83),
			pts : 86,
			pts_count : 78,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 2454378687145356026,
			messages : array(3),
			pts : 56,
			pts_count : 66,
		),
		$client->updateChat(
			chat_id : -6493229997647819150,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -3500633416469150037,
				access_hash : 3340892402467015371,
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
					date : 21,
					active_date : 76,
					source : 44,
					volume : 34,
					about : '7yARhetjIbrOHk4d',
					raise_hand_rating : 2022045344911244638,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 66,
		),
		$client->updateGroupCall(
			chat_id : 7335257026334626581,
			call : $client->groupCallDiscarded(
				id : -2452172850929311755,
				access_hash : 3249114773155295981,
				duration : 87,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -3538636221291613546,
			),
			ttl_period : 77,
		),
		$client->updateChatParticipant(
			chat_id : 3849760140415792683,
			date : 68,
			actor_id : 2023660830064521481,
			user_id : 3140252829300367975,
			prev_participant : $client->chatParticipant(
				user_id : -4624442202278039213,
				inviter_id : 5637975556336400473,
				date : 98,
			),
			new_participant : $client->chatParticipant(
				user_id : -4822868527611070246,
				inviter_id : -9054223276045638125,
				date : 21,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'G9DumKRfWLvCtQk2',
				admin_id : 2477628643817490663,
				date : 69,
				start_date : 11,
				expire_date : 89,
				usage_limit : 2,
				usage : 99,
				requested : 23,
				subscription_expired : 23,
				title : 'LyfPKHQUVxzI5JaA',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 89,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -7171518231309717213,
			date : 44,
			actor_id : -3576660328823795769,
			user_id : -5719231963622842690,
			prev_participant : $client->channelParticipant(
				user_id : 3631221484418311731,
				date : 4,
				subscription_until_date : 76,
			),
			new_participant : $client->channelParticipant(
				user_id : 279697526531177849,
				date : 10,
				subscription_until_date : 76,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'TgvLdp1whb6lzHSs',
				admin_id : 3478168782179941786,
				date : 1,
				start_date : 5,
				expire_date : 2,
				usage_limit : 5,
				usage : 100,
				requested : 69,
				subscription_expired : 60,
				title : 'TfBI0NWaQhO9GqRH',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 75,
		),
		$client->updateBotStopped(
			user_id : -6620103602919039164,
			date : 89,
			stopped : false,
			qts : 56,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'jRJ0vfmkVZ3Cecqu',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 7299637152601215934,
			),
			bot_id : 8221014209881835357,
			commands : array(
				$client->botCommand(
					command : 'Emqd3RPI1brsZVLy',
					description : 'oxKw6tzWSZfsDI5G',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -7894731760257384940,
			),
			requests_pending : 72,
			recent_requesters : array(-378266638384660315),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -6151215312546771411,
			),
			date : 7,
			user_id : -8085718420562550725,
			about : 'HbNt3FzRETph4XDW',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'ZfzYqTCnvotJ7yXa',
				admin_id : -8099867777811807514,
				date : 50,
				start_date : 38,
				expire_date : 26,
				usage_limit : 96,
				usage : 19,
				requested : 11,
				subscription_expired : 19,
				title : 'nko9LCyhqW2pe5Bf',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 75,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 8572232558977196414,
			),
			msg_id : 83,
			top_msg_id : 64,
			saved_peer_id : $client->peerUser(
				user_id : -682895698318479381,
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
			query_id : 1694180400697333948,
		),
		$client->updateBotMenuButton(
			bot_id : -3647184539842528131,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -4722155093483801878,
			),
			msg_id : 21,
			transcription_id : -7301101675270550037,
			text : 'YJku2oPzIXUs9ij4',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 6592551076817529506,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6868507996492832410,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 2633743496084379387,
			),
			msg_id : 3,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 32,
					h : 40,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 95,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -281407961967836904,
			topic_id : 34,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 1733611610647003771,
			order : array(22),
		),
		$client->updateUser(
			user_id : -1145207345870246971,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -4496651275262484146,
			),
			story : $client->storyItemDeleted(
				id : 19,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -4699666845899376998,
			),
			max_id : 1,
		),
		$client->updateStoryID(
			id : 20,
			random_id : -5282731001527970748,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 58,
				cooldown_until_date : 9,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -4387041721293227967,
			),
			story_id : 96,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4518604268132706442,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '94tq3bCarsBF0ge1',
				user_id : -5897141990463012392,
				giveaway_msg_id : 52,
				date : 74,
				expires : 11,
				used_gift_slug : 'OW6zA4Jba3Ms21yl',
				multiplier : 97,
				stars : 5053331432223793838,
			),
			qts : 80,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 7553556576708909525,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1707923463340469112,
			),
			wallpaper : $client->wallPaper(
				id : 8314660861834789244,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 684818078844492775,
				slug : 'EvgX5Q70WZBeTlOk',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7177362225242174726,
			),
			msg_id : 15,
			date : 48,
			actor : $client->peerUser(
				user_id : 8792778661681591622,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'mjNZxEL8eqf1kvgD',
				),
				$client->reactionCustomEmoji(
					document_id : 5589210187078852689,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'pZeO5RsS74GCqiFy',
				),
				$client->reactionCustomEmoji(
					document_id : 3652812399926183085,
				),
				$client->reactionPaid(),
			),
			qts : 76,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 3995057808682934247,
			),
			msg_id : 3,
			date : 2,
			reactions : array(
				$client->reactionCount(
					chosen_order : 10,
					reaction : $client->reactionEmpty(...),
					count : 13,
				),
			),
			qts : 14,
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
					folder_id : 0,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'O3HYaCkxG6cL5Kgu',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 88,
					shortcut : '5oaZgzU4E7tin0Hp',
					top_message : 29,
					count : 55,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 86,
				shortcut : 'IlTYokF4hi5LQqXD',
				top_message : 34,
				count : 14,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 32,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 8,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 50,
			messages : array(51),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'qID8NpJOFRgnTZCQ',
				user_id : 990930395314911824,
				dc_id : 4,
				date : 86,
				rights : $client->businessBotRights(...),
			),
			qts : 14,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'DH6aBzEOT0bprsNx',
			message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			qts : 56,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '1D6jOzHtJrY2lxaQ',
			message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(...),
			),
			qts : 60,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'ArRDbEwFvpPs0gL4',
			peer : $client->peerUser(
				user_id : 1677421885349620548,
			),
			messages : array(11),
			qts : 52,
		),
		$client->updateNewStoryReaction(
			story_id : 82,
			peer : $client->peerUser(
				user_id : 87648317947807973,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -8543797880625196050,
				nanos : 82,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3451193460244427414,
			user_id : -9173003130650374513,
			connection_id : 'UCsRdZOLpuyfSbYJ',
			message : $client->messageEmpty(
				id : 19,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 315026676137094679,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -6648674335807595790,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 54,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -7495444577398730546,
			payload : 'mXuf0hP5VSax3vFE',
			qts : 92,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 96,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3978496541547113073,
				access_hash : 6558121782065152156,
			),
			sub_chain_id : 34,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 53,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 2504783984419170260,
			saved_peer_id : $client->peerUser(
				user_id : -7459346232133306146,
			),
			read_max_id : 97,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 402408250574263155,
			saved_peer_id : $client->peerUser(
				user_id : -3875619948936352281,
			),
			read_max_id : 53,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 7885927762368687502,
			saved_peer_id : $client->peerUser(
				user_id : -8694537306745676110,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -3794518510183994998,
			text : 'nRkNWitCDdfUpFLX',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 5972177532997749638,
			payload : 'ASYW6Fy8J5DXepos',
			until_date : 17,
			qts : 38,
		),
		$client->updateUserPhoto(
			user_id : -1130311558080935658,
			date : 79,
			photo : $client->userProfilePhotoEmpty(),
			previous : true,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1609112909832541101,
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
			id : -4623909951046586312,
			access_hash : -1751653793221753339,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nJ4AGyRNks10rYHf',
					reason : 'HufEN6qjdct0U9ko',
					text : 'jEHUomGuZ1qlnaFs',
				),
			),
			bot_inline_placeholder : 'RfCEnKGkLpxoXwF3',
			lang_code : 'rI30FaoTx8dB7ybP',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 44,
			color : $client->peerColor(
				color : 1,
				background_emoji_id : 5915587541703365357,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : 3246828593499497349,
			),
			bot_active_users : 20,
			bot_verification_icon : 7003246884033966288,
			send_paid_messages_stars : 6322083521598370197,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3178891744223928704,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3113903632537375933,
			title : 'FjqR9Me4ynUothB1',
			photo : $client->chatPhotoEmpty(),
			participants_count : 31,
			date : 33,
			version : 34,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : -1379282266466983846,
			title : 'CA43FntX8cDesb5f',
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
			id : 1787971776192234771,
			access_hash : 2923301096721213191,
			title : 'DzACfy8Vi1cU0YP5',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NS2Y1q6DjTEHZr9L',
					reason : '98z4L1XSlNuqo0AU',
					text : 'FINnWtdaO52lQDAr',
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
				until_date : 10,
			),
			participants_count : 94,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 35,
			color : $client->peerColor(
				color : 59,
				background_emoji_id : -8654207709115304679,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 156048853113206076,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 54,
			subscription_until_date : 37,
			bot_verification_icon : -2567236085387882066,
			send_paid_messages_stars : 6761683977571389435,
			linked_monoforum_id : 3764247577625247198,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5522950052803460417,
			access_hash : 4088199464998712856,
			title : 'jaMSP6spXgQNvi2u',
			until_date : 64,
		),
	),
	date : 85,
	seq_start : 17,
	seq : 42,
);
```